<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    //
    public function index() {
        //
    }

    public function show($id) {
        //
    }

    public function to_coin($price) {
        $display_string = '';
        if ($price > 10000) {
            $temp = intval($price / 10000);
            $display_string = "<img src='https://www.gw2tp.com/static/img/gold.png'>" . $display_string . $temp . ' ';
            $price = $price % 10000;
            $temp = intval($price / 100);
            $display_string = $display_string . "<img src='https://www.gw2tp.com/static/img/silver.png'>" . $temp . ' ';
            $display_string = $display_string . "<img src='https://www.gw2tp.com/static/img/copper.png'>" . ($price % 100);
            return $display_string;
        } elseif ($price > 100) {
            $temp = intval($price / 100);
            $display_string = $display_string . "<img src='https://www.gw2tp.com/static/img/silver.png'>" . $temp . ' ';

            $display_string = $display_string . "<img src='https://www.gw2tp.com/static/img/copper.png'>" . ($price % 100);
            return $display_string;
        } else {
            $display_string = $display_string . "<img src='https://www.gw2tp.com/static/img/copper.png'>" . ($price % 100);
            return $display_string;
        }
    }

    public function display_rarity($rarity) {
        
        switch ($rarity) {
            case 0:
                $description = 'Junk';
                break;
            case 1:
                $description = 'Common';
                break;
            case 2:
                $description = 'Fine';
                break;
            case 3:
                $description = 'Masterwork';
                break;
            case 4:
                $description = 'Rare';
                break;
            case 5:
                $description = 'Exotic';
                break;
            case 6:
                $description = 'Ascended';
                break;
            case 7:
                $description = 'Legendary';
                break;
        }
        
        return $description;
    }

    function calculate_profit($item) {
    if ( $item->max_offer_unit_price > 0 ) {
        $profit = ((($item->min_sale_unit_price * 0.85) - $item->max_offer_unit_price) / $item->max_offer_unit_price) * 100;
        $profit = intval($profit).'%';
    }
    else
    {
        $profit = 0;
    }
        
        return $profit;
    }
    
}
