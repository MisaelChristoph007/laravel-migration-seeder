<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\travel;

class TravelController extends Controller
{
    //
    public function index() {

        // dati database
          $travels = travel::all();
          dump($travels);

        return view('home', compact('travels'));
    }
}
