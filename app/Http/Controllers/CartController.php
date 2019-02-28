<?php

namespace App\Http\Controllers;

use App\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $newBidPrice;
    public $currency;
    public $bidIndex;
    public $bidCode;

    public function changeBit(Request $request)
    {

        $this->bidCode = $request->data['bidCode'];
        $this->bidIndex = Cart::getIndexBidRowByCode($this->bidCode);
        $this->currency = $request->data['currency'];
        $this->newBidPrice = $this->getPriceByCurrency($this->currency, $request->data['newBidPrice']);
        $bidRow = Cart::getBidRowByIndex($this->bidIndex);

        // [13] The Highest(Current) Bid Price [7] Offer Price(USD)
        if ($this->newBidPrice > $bidRow[13] && $this->newBidPrice < $bidRow[7]) {
            $bidRow[13] = $this->newBidPrice;
        }
        $bidRow[12] = $this->newBidPrice;               // [12] Last Traded Price
        $bidRow[11] = Carbon::now()->toDateString();    // [11] Last Traded Date

        $newWineList = Cart::changeBidDataRowInSessionByIndex($this->bidIndex, $bidRow);
        return $newWineList;
    }

    public function getPriceByCurrency($currency, $price)
    {
//        $currencyList = [
//            'USDC' => 1,
//            'BTC' => 0.0002671282,
//            'ETH' => 0.82,
//            'EOS' => 0.4,
//            'CWEX' => 6.26,
//        ];
        switch ($currency) {
            case 'USDC':
                $newPrice = round($price, 2);
                break;
            case 'BTC':
                $newPrice = round($price * 0.0002671282, 4);
                break;
            case 'ETH':
                $newPrice = round($price * 0.82, 3);
                break;
            case 'EOS':
                $newPrice = round($price * 0.4, 2);
                break;
            case 'CWEX':
                $newPrice = round($price * 6.26, 2);
                break;
        }
        return $newPrice;
    }
}
