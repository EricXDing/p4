<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Person;


class DirectorController extends Controller
{
        //
        public function index(){
          return view('content.index');
        }

        public function addperson(){
          return view('content.addperson');
        }

}
