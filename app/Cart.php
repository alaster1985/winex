<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    public static function addGlobalWineListToSession()
    {
        Session::put(Session::getId(), []);
        Session::push(Session::getId(), Csv::getGlobalWineListFromCsv());
        $wineList = Session::get(Session::getId())[0]; // [0] - global wine list
        return $wineList;
    }

    public static function checkGlobalWineListInSession()
    {
//        return Session::has(Session::getId());
        return !empty(Session::get(Session::getId())[0]); // [0] - global wine list
    }

    public static function getGlobalWineListFromSession()
    {
        $wineList = Session::get(Session::getId())[0]; // [0] - global wine list
        return $wineList;
    }

    public static function getGlobalBidRowByIndex($index)
    {
        $bidRow = Session::get(Session::getId())[0][$index]; // [0] - global wine list
        return $bidRow;
    }

    public static function getGlobalIndexBidRowByCode($code)
    {
        $bidRows = Session::get(Session::getId())[0]; // [0] - global wine list
        foreach ($bidRows as $index => $bidRow) {
            if ($bidRow[0] === $code) { // [0] - #code of bid
                return $index;
            }
        }
        return false;
    }

    public static function changeGlobalBidDataRowInSessionByIndex($index, $newBidDataRow)
    {
        $currentGlobalWineList = self::getGlobalWineListFromSession();
        $currentCaveWineList = self::getCaveWineListFromSession();
        $currentGlobalWineList[$index] = $newBidDataRow;
        Session::put(Session::getId(), []);
        Session::push(Session::getId(), $currentGlobalWineList);
        Session::push(Session::getId(), $currentCaveWineList);
        $newWineList = Session::get(Session::getId())[0]; // [0] - global wine list
        return $newWineList;
    }

    public static function unsetBidFromGlobalWineListByIndex($index)
    {
        $currentWineList = self::getGlobalWineListFromSession();
        $currantCaveWineListArray = self::getCaveWineListFromSession();
        $newCaveWineBit = $currentWineList[$index];
        array_splice($currentWineList, $index, 1);
        Session::put(Session::getId(), []);
        Session::push(Session::getId(), $currentWineList);
        Session::push(Session::getId(), $currantCaveWineListArray);
        self::addCaveWineBitToSession($newCaveWineBit);
        $newWineList = Session::get(Session::getId())[0]; // [0] - global wine list
        return $newWineList;
    }

    public static function checkCaveWineListInSession()
    {
        return !empty(Session::get(Session::getId())[1]); // [1] - cave wine list
    }

    public static function getCaveWineListFromSession()
    {
        $wineList = Session::get(Session::getId())[1] ?? []; // [1] - cave wine list
        return $wineList;
    }

    public static function addCaveWineBitToSession($caveWineBit)
    {
        $currantCaveWineListArray = self::getCaveWineListFromSession();
        array_push($currantCaveWineListArray, $caveWineBit);
        $currentGlobalWineList = self::getGlobalWineListFromSession();
        Session::put(Session::getId(), []);
        Session::push(Session::getId(), $currentGlobalWineList);
        Session::push(Session::getId(), $currantCaveWineListArray);
        $wineList = Session::get(Session::getId())[1]; // [1] - cave wine list
        return $wineList;
    }
}
