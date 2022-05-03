<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\CarBrand;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function order(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surName' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'postalCode' => 'required|max:255',
            // 'images' => 'required|max:255',
            'logoCount' => 'required|max:255',
            // 'count' => 'required|max:255',
            'wheel' => 'required|max:255',
            'covrikType' => 'required|max:255',
            'model' => 'required|max:255',
            'seria' => 'required|max:255',
            'year' => 'required|max:255',
            'cupe' => 'required|max:255',
            // 'payment' => 'required|max:255',
            'price' => 'required|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => [$validator->errors()],
            ]);
        }

        $brand = CarBrand::find($request->model);

        $order = new Order();
        $order->name = $request->name;
        $order->surName = $request->surName;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->city = $request->city;
        $order->address = $request->address;
        $order->postalCode = $request->postalCode;
        $order->images = $request->images;
        $order->logoCount = $request->logoCount;
        // $order->count = $request->count;
        $order->wheel = $request->wheel;
        $order->covrikType = $request->covrikType;
        $order->model = $brand->brand;
        $order->seria = $request->seria;
        $order->year = $request->year;
        $order->cupe = $request->cupe;
        $order->payment = $request->payment;
        $order->price = $request->price;
        $order->save();

        // $details = [
        //     'name' => $request->name,
        //     'surName' => $request->surName,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'city' => $request->city,
        //     'address' => $request->address,
        //     'postalCode' => $request->postalCode,
        //     'images' => $request->images,
        //     'price' => $request->price,
        //     'created_at' => $order->created_at,
        // ];

        // Mail::to('narekminasyan377@gmail.com')->send(new OrderMail($details));

        return response()->json([
            'success' => true,
            'message' => 'Success',
        ]);
    }
}
