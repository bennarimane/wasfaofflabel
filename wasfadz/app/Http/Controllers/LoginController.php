<?php

namespace App\Http\Controllers;
use Auth;
use App\user;
use App\classification;
use App\medicament;
use App\pathologie;
use App\categorie;
use App\prescription;
use App\indication;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  
    public function login(Request $request)
    {
   
        if(Auth::attempt([
 'email' => $request->email,
 'password' => $request->password
 
        ]))
 
        {
 
         $user = User::where('email', $request->email)->first();
         if($user->is_admin()==1)
         {  
  return redirect()->route('dashboard');
 
         }
         else
         $classifications=Classification::All();
         $medicaments=Medicament::All();
         $pathologies=Pathologie::All();
         $categories=Categorie::All();
              return view('home', ['classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories]);
        }
        return redirect()->back();
    }
   
}
