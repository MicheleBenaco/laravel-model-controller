<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $films = ['name'=>'avatar'];
        return view('home', compact('films'));
    }
}
