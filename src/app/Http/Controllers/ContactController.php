<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm()
    {
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'type', 'content' ]);
        return view('confirm', compact('contact'));
    }
}
