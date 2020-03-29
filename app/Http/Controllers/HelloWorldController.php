<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class HelloWorldController extends Controller
{
    public function index()
    {
        return view('helloworld');
    }
}