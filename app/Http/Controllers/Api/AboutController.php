<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutDetailResource;
use App\Http\Resources\AboutResource;
use App\Models\About;
use App\Models\AboutDetail;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $about = About::find(1);
        $about_detail = AboutDetail::orderBy('id', 'ASC')->get();
        
        return response()->json([
            'success' => true,
            'data'    => [
                            'about' => $about, 
                            'about_detail' => $about_detail,
                        ],
            'message' => 'About retrieved successfully',
        ]);
    }
}
