<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralOptionsController extends Controller
{
    function welcome()
    {
        return view('index');
    }

    function setLang(string $locale)
    {
        return redirect()->back()->withCookie('locale',$locale);
    }
}
