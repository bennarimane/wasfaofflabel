<?php

namespace App\Http\Controllers;
use App\Commentaire;
use Auth;
use Session;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function store(Request $request,$id){
        
        $commentaire = new Commentaire();
        $commentaire->user_id =Auth::user()->id;
        $commentaire->prescription_id = $id;
        $commentaire->contenu = $request->input('contenu');
     
        $commentaire->save();

        return redirect()->back();
    }
}
