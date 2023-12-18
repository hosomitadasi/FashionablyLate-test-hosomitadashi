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
        $FashionablyLate = $request->only(['name', 'gender', 'mail', 'tel', 'address', 'build', 'type', 'content' ]);
        return view('confirm', compact('FashionablyLate'));
    }

    public function store()
    {

    }
}
