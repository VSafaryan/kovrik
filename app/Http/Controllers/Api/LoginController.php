<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // public function register(Request $request) {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required',
    //     ]);
   
    //     if($validator->fails()){
    //         return $this->sendError('Validation Error.', $validator->errors());       
    //     }

    //     $input = $request->all();
    //     $input['password'] = bcrypt($input['password']);
    //     $user = User::create($input);
    //     $success['token'] =  $user->createToken('kovrik')->plainTextToken;
    //     $success['name'] =  $user->name;
   
    //     return $this->sendResponse($success, 'User register successfully.');
    // }
    
    public function login(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('kovrik')->plainTextToken;
            $success['name'] = $user->name;
            
            return redirect()->route('admin', app()->getLocale());
        } else {
            return redirect()->back();
        }
    }
    
    public function logout() {
        Auth::logout();

        return redirect()->route('login', app()->getLocale());
    }
}
