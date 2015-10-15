<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class StaticController extends Controller
{
    /**
     * Index page
     *
     * @return \Illuminate\View\View
     */
    public function indexPage()
    {
        return view('static.index');
    }

    /**
     * Download page
     *
     * @return \Illuminate\View\View
     */
    public function downloadPage()
    {
        return view('static.download');
    }

    /**
     * About
     *
     * @return \Illuminate\View\View
     */
    public function aboutPage()
    {
        return view('static.about');
    }

    public function myAccountPage()
    {
        Carbon::setLocale('cs');

        return view('static.account');
    }
}
