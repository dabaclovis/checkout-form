<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class RegisterFormController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }
}
