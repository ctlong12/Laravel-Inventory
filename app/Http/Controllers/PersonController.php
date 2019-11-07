<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;


class PersonController extends Controller
{
    
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function create()
    {
        //
        return view('person.create');
        
    }
    
        public function store(Request $request)
    {
       
        $validated = $request->validate([
            'fname' => 'required|max:100', 
            'lname' => 'required|max:100', 
            'email' => 'required' ,
            'birthDate' => 'date',

        ]);
         
        $item = Person::create($validated);
        
        return redirect('/assets')->with('success', 'Person was added');
                
    }

}
