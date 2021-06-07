<?php

namespace App\Http\Controllers;
use App\reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function addMore()
    {
        return view("reference");
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMorePost(Request $request)
    {
        $request->validate([
            'addmore.*.name' => 'required',
            'addmore.*.qty' => 'required',
            'addmore.*.price' => 'required',
        ]);
    
        foreach ($request->addmore as $key => $value) {
            Reference::create($value);
        }
    
        return back()->with('success', 'Record Created Successfully.');
    }
}
