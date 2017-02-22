<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller {

    function index() {

        $orders = json_decode(file_get_contents('https://api.guildwars2.com/v2/commerce/transactions/history/sells?access_token=6CFCBB36-DAC7-0B49-82FA-F9367263EDEE584A2485-5563-4A0F-B9AD-E96258F812DB'), true);

        foreach ($orders as $order) {
            echo $order['item_id'].'<br />';
        }
    }

}
