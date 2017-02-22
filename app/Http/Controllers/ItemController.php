<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller {

    //
    function index() {
        
    }

    function listItems(Request $request) {

        
        
        $searchstring = $request->input('search');
        $rarity = $request->input('rarity');
        $type_id = $request->input('type_id');
        echo $rarity;
       

//        if (isset($_GET['search'])) {
//            $searchstring = $_GET['search'];
//        }

        $items = Item::where('name', 'LIKE', '%' . $searchstring . '%')->where('rarity', '=', $rarity)->where('type_id', '=', $type_id)->orderBy('name', 'ASC')->paginate(25);

        

        return view('itemslist', array('items' => $items));
    }

    public function show($id) {
        $item = Item::find($id);
        return view('itemshow', array('item' => $item));
    }

    public function buildDatabase() {


// Uncomment section below to build up the list of unique item IDs        
        set_time_limit(6000);
//
        $list = json_decode(file_get_contents('http://www.gw2spidy.com/api/v0.9/json/all-items/*all*'), true);
//
        Item::truncate();
//
        $list = $list['results'];


        foreach ($list as $element) {
            $item = new Item;
            $item->id = $element['data_id'];
            $item->name = $element['name'];
            $item->rarity = $element['rarity'];
            $item->img = $element['img'];
            $item->restriction_level = $element['restriction_level'];
            $item->type_id = $element['type_id'];
            $item->sub_type_id = $element['sub_type_id'];
            $item->max_offer_unit_price = $element['max_offer_unit_price'];
            $item->min_sale_unit_price = $element['min_sale_unit_price'];
            $item->offer_availability = $element['offer_availability'];
            $item->sale_availability = $element['sale_availability'];
            $item->sale_price_change_last_hour = $element['sale_price_change_last_hour'];
            $item->offer_price_change_last_hour = $element['offer_price_change_last_hour'];
            $item->save();
        }
    }

}
