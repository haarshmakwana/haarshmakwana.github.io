<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMe;

class AdminController extends Controller
{
    public function contactMe()
    {
        $contactMe = ContactMe::get();

        return view('admin.contactMe',compact('contactMe'));
    }
}
