<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Csv extends Model
{
    public static function getGlobalWineListFromCsv()
    {
        $wineListArray = [];
        $csvFile = fopen('Wine_list_2.csv', 'r');
        while (($line = fgetcsv($csvFile)) != false) {
//            array_push($line, false); // for sale marker
            array_push($wineListArray, $line);
        }
        fclose($csvFile);
        array_push($wineListArray, [Auth::id() => 30000]); // amount of money in the account, default 30000 USDC
        return $wineListArray;
    }
}
