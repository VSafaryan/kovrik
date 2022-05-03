<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SampleResource;
use App\Models\Sample;

class SampleController extends BaseController
{
    public function index() {
        $sample = Sample::orderBy('id', 'DESC')->get();

        return $this->sendResponse($sample, 'Sample retrieved successfully');
    }
}
