<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscribeController extends Controller
{
    public function subscribe(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:subscribes',
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Email is not entered correctly'
            ]);
        }

        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();

        return response()->json([
            'success' => true,
            'message' => 'success',
        ]);
        
    }
}
