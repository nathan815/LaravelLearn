<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }
}
