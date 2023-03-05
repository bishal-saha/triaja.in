<?php

namespace App\Http\Controllers;

class PageController
{
    public function about() {
        echo view('pages.about.index');
    }

    public function approach() {
        echo view('pages.approach');
    }

    public function consulting() {
        echo "consulting";
    }
}
