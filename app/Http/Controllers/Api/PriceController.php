<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index($status) {
        if($status != 1 && $status != 2) {
            return response()->json([
                'data' => false,
            ]);
        }

        if($status == 1) {
            $price = Price::find(1);
        } elseif($status == 2) {
            $price = Price::find(2);
        }

        return response()->json([
            'data' => $price,
        ]);
    }
}
