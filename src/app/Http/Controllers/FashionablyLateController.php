<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionablyLateController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'gender', 'mail', 'tel', 'home', 'mantion', 'type', 'content' ]);
        return view('confirm', ['contact' => $contact]);
    }

    public function thanks()
    {

    }
}
