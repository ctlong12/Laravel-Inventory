<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;


class OwnerController extends Controller
{
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
               
        return view('owner.index', compact('assets'));
    }
    
        public function show($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.show', compact('asset'));
        //return view('assets.show', array('asset' => $asset));
        
    }

}
