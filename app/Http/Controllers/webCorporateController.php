<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webCorporateController extends Controller
{
   
   public function index(){

   		 return view('welcome');

   }

    public function kitAdn(){

   		 return view('kitAdn');

   }

   public function contacto(){

   		 return view('contacto');

   }

   public function consultasGratuitas(){

   		 return view('consultasGratuitas');

   }

   public function promociones(){

   		 return view('promociones');

   }

   
}
