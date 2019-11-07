<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asset;
use App\User;
use App\Person;



class AssetsController extends Controller {
        
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
    public function index()
    {
       $assets = Asset::all();
               
        return view('assets.index', compact('assets'));
       // $user_id = auth()->user()->id;
        //$user = User::find($user_id)->assets()->paginate(10);
        //return view('assets.index', compact('assets', $user));

        //return view('assets.index')->with('assets', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $people = Person::all();
        return view('assets.create', compact('people'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'name' => 'required|max:100', 
            'description' => 'required' ,
            'purchased' => 'date',
            'person_id' => 'required'
            
        ]);
         
        $item = Asset::create($validated);
        
        return redirect('/assets')->with('success', 'Item was saved successfully!');
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.show', compact('asset'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.edit', compact('asset'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validated = $request->validate([
            'name' => 'required|max:100', 
            'description' => 'required' ,
        ]);
        Asset::whereId($id)->update($validated);
        
        
        return redirect('assets')->with('success', 'Asset information updated successfully!');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();
        
        return redirect('assets')->with('success', 'Asset information deleted successfully!');
    }
}
