<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Train;

class HomeController extends Controller
{
    public function index() {
        $data = [
            "pagetitle" => 'Trains',
        ];
        $Trains = Train::all();
        // dd($Trains);
        return view('home', compact('data','Trains'));
    }
}
