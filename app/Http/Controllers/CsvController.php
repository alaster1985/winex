<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsvController extends Controller
{
    public function getWineListArray()
    {
        $wineListArray = [];
        $csvFile = fopen('Wine_list_2.csv', 'r');
        while (($line = fgetcsv($csvFile)) != false) {
            array_push($wineListArray, $line);
        }
        fclose($csvFile);
        array_push($wineListArray, Auth::id());
        return $wineListArray;
    }
}
