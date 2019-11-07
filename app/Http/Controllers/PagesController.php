<?php

// Returns welcome page when a user is not authenticated

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel!';
        return view('pages.index');
    }
}