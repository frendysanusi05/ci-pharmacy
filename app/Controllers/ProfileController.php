<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index(): string
    {
        
        return view('profile');
    }
}
