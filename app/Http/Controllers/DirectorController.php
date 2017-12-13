<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Relation;
use App\PersonRelation;



class DirectorController extends Controller
{
        public function index(Request $request)
        {
          if (null!==$request->input("selection"))
          {
            $connections = PersonRelation::where('relation_id','like', $request->input("selection"))->get();
            $personWithID = [];
            foreach ($connections as $number)
            {
              $personWithID[$number['id']]=$number->person_id;
            }

            $holder = Relation::where('id','like', $request->input("selection"))->get();
            foreach ($holder as $holder)
            $display = 'displaying relationships for '.$holder->type;

            $relationships = Relation::getForCheckboxes();
            $people = Person::whereIn('id', $personWithID)->get();
          } else
          {
            $display = '';
            $relationships = Relation::getForCheckboxes();
            $people = Person::orderBy('id')->get();
          }
          return view('content.index')->with([
            'people'=> $people,
            'relationships'=> $relationships,
            'display' => $display,
          ]);
        }

        public function read()
        {
          return view('content.read');
        }

        public function add()
        {
          $relationships = Relation::getForCheckboxes();
          return view('content.addperson')->with(['relationships'=>$relationships]);
        }
        public function adding(Request $request)
        {
          $person = new Person();
          $person->name = $request->input('name');
          $person->email = $request->input('email');
          $person->comments = $request->input('comments');
          $person->save();
          $person->relations()->sync($request->input('relationships'));
          $person->save();
          return redirect('/');
        }


        public function edit($id)
        {
          $person = Person::find($id);
          $relationships = Relation::getForCheckboxes();
          $CurrentRelationships = [];
          foreach ($person->relations as $relation)
          {
            $CurrentRelationships[] = $relation->type;
          }
          return view ('content.edit')->with([
            'person'=>$person,
            'relationships'=> $relationships,
            'CurrentRelationships' => $CurrentRelationships,
          ]);
        }
        public function update(request $request, $id)
        {
          $person = Person::find($id);
          $person->relations()->sync($request->input('relationships'));

          $person->name = $request->input('name');
          $person->email = $request->input('email');
          $person->comments = $request->input('comments');
          $person->save();
          return redirect('/');
        }

        public function delete($id)
        {
          $person = Person::find($id);
          $person->delete();
          return redirect('/');
        }



}
