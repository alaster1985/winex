<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Support\Facades\Session;

class CsvController extends Controller
{
    public function getWineListArray()
    {
//        Session::forget(Session::getId());
        if (Cart::checkWineListInSession()){
            $wineListArray = Cart::getWineListFromSession();
        } else {
            $wineListArray = Cart::addWineListToSession();
        }
        return $wineListArray;
    }
}
