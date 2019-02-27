<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    public static function addWineListToSession()
    {
        Session::put(Session::getId(), []);
        Session::push(Session::getId(), Csv::getWineListFromCsv());
        $val = Session::get(Session::getId())[0]; // [0] - global wine list
        return $val;
    }
    public static function checkWineListInSession()
    {
        return Session::has(Session::getId());
    }

    public static function getWineListFromSession()
    {
        $wineList = Session::get(Session::getId())[0]; // [0] - global wine list
        return $wineList;
    }
}
