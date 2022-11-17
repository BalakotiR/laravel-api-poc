<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dhome() {

        $cookies = $_COOKIE;

        return view('dashboard', compact('cookies'));
    }

}
