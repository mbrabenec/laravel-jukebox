<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;

class DirectorController extends Controller
{
    public function index () {

        $directors = Director::get();
        return view('director.index', 
            compact(['directors'])
        ); 
    }
    
    public function create () {

        $director = new Director;
        return view('director.create-edit', 
            compact(['director'])
        );
    }

    public function edit($id)
    {
        // find in database or throw 404 error
        $director = Director::findOrFail($id);

        return view('director.create-edit', compact(['director']));
    }

    public function store (Request $request) {

        //VERIFY DATA

        $this->validate($request, [
            'name' => 'required|unique:directors',
            'age' => 'required'
        ], [
            'name.required' => 'Just give us your name, please.',
            'age.required' => 'Age!!!!!!!!'
        ]);

        //empty object

        $director = new Director;

        //fill with data

        $director->name = $request->input('name');
        $director->age = $request->input('age');
        $director->genre_id = $request->input('genre_id');

        //save to DB

        $director->save();

        // inform the user of success
        session()->flash('success_message', 'Director was added.');

        // redirect
        return redirect(action('DirectorController@index'));
    }



    public function update(Request $request, $id)
    {
        // do validation
        $this->validate($request, [
            'name' => 'required|unique:directors',
            'age' => 'required'
        ], [
            'name.required' => 'Just give us your name, please.',
            'age.required' => 'Age!!!!!!!!'
        ]);

        // retrieve from the database
        $director = Director::findOrFail($id);

        //fill with data

        $director->name = $request->input('name');
        $director->age = $request->input('age');
        $director->genre_id = $request->input('genre_id');

        //save to DB

        $director->save();

        // inform the user of success
        session()->flash('success_message', 'Director edited.');

        return redirect(action('DirectorController@index'));

    }

}
