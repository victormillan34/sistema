<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class sistema extends Controller
{
   public function form ()
   {
       return view('proyecto.form');
   }
     public function form2 ()
   {
       return view('proyecto.form2');
   }
}

