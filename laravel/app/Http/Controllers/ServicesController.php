<?php

namespace App\Http\Controllers;

class ServicesController extends Controller
{
    public function index() {
        return view('blank');
    }

    public function backgroundVerification() {
        return view('services.bgv.index');
    }

    public function bfsiKyc() {

    }
}
