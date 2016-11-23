<?php

namespace App\Http\Controllers;
use App\dm;
use Illuminate\Http\Request;

class dmControllers extends Controller
{
    public function show($id){
        $dm = dm::find($id);
        return view('dmAbout', compact('dm'));
    }
}
