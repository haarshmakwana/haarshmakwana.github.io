<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMe;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactMe::create($input);

        return Redirect()->route('front.home');
    }
}
