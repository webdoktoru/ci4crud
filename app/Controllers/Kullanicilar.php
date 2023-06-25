<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kullanicilar extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
