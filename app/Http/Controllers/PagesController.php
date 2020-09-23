<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function credits() {
        return view('credits');
    }
    public function email() {

        return new WelcomeMail();
    }
    public function admin() {
        return view('admin');
    }
}
