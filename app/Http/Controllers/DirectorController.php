<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Relation;



class DirectorController extends Controller
{
        //
        public function index(){
          $people = Person::orderBy('id')->get();
          return view('content.index')->with('people', $people);
        }

        public function add(){
          return view('content.addperson');
        }

        public function add2(){
          return view('content.edit2');
        }


        public function adding(Request $request){
          #add new book to the databases
          $person = new Person();
          $person->name = $request->input('name');
          $person->email = $request->input('email');
          $person->comments = $request->input('comments');
          $person->save();
          return redirect('/');
        }

        public function edit($id){
          $person = Person::find($id);

          $relationships = Relation::getForCheckboxes();

          return view ('content.edit')->with([
            'person'=>$person,
            'relationships'=> $relationships,
          ]);
        }


        public function update(request $request, $id){
          $person = Person::find($id);
          $person->name = $request->input('name');
          $person->email = $request->input('email');
          // $person->checkbox = $request->input('checkbox');
          $person->comments = $request->input('comments');
          $person->save();
          return redirect('/');
        }

        public function delete($id){
          $person = Person::find($id);
          // if (!$person) {
          //   return redirect('/')->with('alert', 'Person not found');
          // }
          $person->delete();
          return redirect('/');
        }



}
