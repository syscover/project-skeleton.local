<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebFrontendController extends Controller
{
    public function home(Request $request)
    {
        $response = [];

        return view('web.content.home', $response);
    }

    public function menu01(Request $request)
    {
        $response = [];

        return view('web.content.menu_01', $response);
    }
}