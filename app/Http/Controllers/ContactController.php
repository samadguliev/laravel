<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ContactController extends Controller
{
    use ValidatesRequests;
    public function submit(ContactRequest $request)
    {
//        dd($request->input('subject'));
//        $validation = $this->validate($request, [
//            'subject' => 'required|min:5|max:12',
//            'message' => 'required|min:15|max:500',
//        ]);
    }

}
