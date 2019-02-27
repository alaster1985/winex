<?php

namespace App\Http\Controllers;

use App\Cart;

class CsvController extends Controller
{
    public function getWineListArray()
    {
        if (Cart::checkWineListInSession()){
            $wineListArray = Cart::getWineListFromSession();
        } else {
            $wineListArray = Cart::addWineListToSession();
        }
        return $wineListArray;
    }
}
