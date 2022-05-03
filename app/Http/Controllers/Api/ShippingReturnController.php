<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShippingReturnResource;
use App\Models\ShippingReturn;
use Illuminate\Http\Request;

class ShippingReturnController extends BaseController
{
    public function index() {
        $shiiping_return = ShippingReturn::find(1);

        return $this->sendResponse($shiiping_return, 'Sipping & Returns retrieved successfully');
    }
}
