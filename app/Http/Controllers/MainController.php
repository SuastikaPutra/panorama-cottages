<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function services() {
        return view('services');
    }

    public function contact() {
        return view('contact');
    }

    public function rooms() {
        return view('rooms');
    }

    public function elements() {
        return view('elements');
    }

    public function maps() {
        return view('maps');
    }

    public function room1() {
        return view('room-1');
    }

    public function room2() {
        return view('room-2');
    }

}
