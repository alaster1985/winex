<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getWineListArray()
    {
        $wineListArray = Csv::getWineListFromCsv();
        return $wineListArray;
    }
}
