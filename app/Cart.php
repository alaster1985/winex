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
        $wineList = Session::get(Session::getId())[0]; // [0] - global wine list
        return $wineList;
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

    public static function getBidRowByIndex($index)
    {
        $bidRow = Session::get(Session::getId())[0][$index]; // [0] - global wine list
        return $bidRow;
    }

    public static function getIndexBidRowByCode($code)
    {
        $bidRows = Session::get(Session::getId())[0]; // [0] - global wine list
        foreach ($bidRows as $index => $bidRow) {
            if ($bidRow[0] === $code) { // [0] - #code of bid
                return $index;
            }
        }
        return false;
    }

    public static function changeBidDataRowInSessionByIndex($index, $newBidDataRow)
    {
        $currentWineList = self::getWineListFromSession();
        $currentWineList[$index] = $newBidDataRow;
        Session::put(Session::getId(), []);
        Session::push(Session::getId(), $currentWineList);
        $newWineList = Session::get(Session::getId())[0]; // [0] - global wine list
        return $newWineList;
    }
}
