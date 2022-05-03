<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Http\Request;

class SampleTypeController extends Controller
{
    public function index() {
        $carpet = ProductType::where('type', 'carpet')->orderBy('id', 'DESC')->get();
        $leather = ProductType::where('type', 'leather')->orderBy('id', 'DESC')->get();
        $covrik = ProductType::where('type', 'covrik')->orderBy('id', 'DESC')->get();

        return response()->json([
            'success' => true,
            'data' => ['carpet' => $carpet, 'leather' => $leather, 'covrik' => $covrik],
        ]);
    }
}
