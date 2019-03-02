<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Support\Facades\Session;

class CsvController extends Controller
{
    public function getGlobalWineListArray()
    {
//        Session::forget(Session::getId());
        if (Cart::checkGlobalWineListInSession()){
            $wineListArray = Cart::getGlobalWineListFromSession();
        } else {
            $wineListArray = Cart::addGlobalWineListToSession();
        }
        return $wineListArray;
    }

    public function getCaveWineListArray()
    {
//        Session::forget(Session::getId());
        if (Cart::checkCaveWineListInSession()){
            $caveWineListArray = Cart::getCaveWineListFromSession();
        } else {
            $caveWineListArray = [['1' => 30000]];
        }
        return $caveWineListArray;
    }
}
