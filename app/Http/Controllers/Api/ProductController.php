<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sample;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $product = Sample::orderBy('id', 'DESC')->get();

        return response()->json([
            'success' => true,
            'data' => $product,
        ]);
    }
}
