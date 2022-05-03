<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index() {
        $contact = Contact::find(1);

        return response()->json([
            'success' => true,
            'data' => $contact,
        ]);
    }
    
    public function message(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:2000',
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => [$validator->errors()],
            ]);
        }

        $contact_message = new ContactMessage();
        $contact_message->name = $request->name;
        $contact_message->email = $request->email;
        $contact_message->message = $request->message;
        $contact_message->save();

        return response()->json([
            'success' => true,
            'message' => 'Success',
        ]);
    }
}
