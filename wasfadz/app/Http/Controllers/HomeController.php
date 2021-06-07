<?php

namespace App\Http\Controllers;
use App\user;
use App\classification;
use App\medicament;
use App\pathologie;
use App\categorie;
use App\prescription;
use App\indication;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { $classifications=Classification::All();
        $medicaments=Medicament::All();
        $pathologies=Pathologie::All();
        $categories=Categorie::All();
             return view('home', ['classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories]);
   
    }
}
