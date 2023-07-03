<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralOptionsController extends Controller
{
    function welcome()
    {
        return view('index');
    }

    function dashboard()
    {
        return view('dashboard');
    }

    function setLang(string $locale)
    {
        return redirect()->back()->withCookie('locale',$locale);
    }
}
