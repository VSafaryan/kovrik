<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $product = Sample::orderBy('id', 'DESC')->get();

        return view('front.product', compact('product'));
    }
}
