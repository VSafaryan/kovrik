<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\Price;
use App\Models\ProductType;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index() {
        // $carpet = ProductType::where('type', 'carpet')->orderBy('id', 'DESC')->get();
        // $leather = ProductType::where('type', 'leather')->orderBy('id', 'DESC')->get();
        // $covrik = ProductType::where('type', 'covrik')->orderBy('id', 'DESC')->get();
        $car = CarBrand::all();
        $price = Price::where('status', 1)->first();

        return view('front.edit', compact('car', 'price'));
    }

    public function getOwnType(Request $request, $language='en') {
        $own_type = ProductType::where('type', $request->own_type)->orderBy('id', 'DESC')->get();

        return response()->json([
            'data' => $own_type
        ]);
    }

    public function getCarModel(Request $request, $language='en') {
        $car = CarModel::where('brand_id', $request->id)->get();
        
        return response()->json([
            'data' => $car,
        ]);
    }

    public function getPrice(Request $request, $language='en') {
        if($request->price == 'yes') {
            $price = Price::where('status', 2)->first();
        } elseif($request->price == 'no') {
            $price = Price::where('status', 1)->first();
        }

        return response()->json([
            'data' => $price
        ]);
    }
}
