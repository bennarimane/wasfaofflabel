<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Indication;
use App\Pathologie;
use App\Proposition;
use Auth;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function create()
    {
        $posts = Post::all();
        return view('posts',compact('posts'));    
    }
    public function list()
    {
        $posts = Post::all();
        return view('avis',compact('posts'));    
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'age' => 'required',
            'unite' => 'required',
            'poids' => 'required',
            'pathologie_id'=>'required',
            'indication_id'=>'required',
            'description' => 'required',
            'tags' => 'required',
        ]);

        $input = $request->all();
        $tags = explode(", ", $input['tags']);
        $post = Post::create($input);
        $post->tag($tags);

        return back()->with('success','Post created successfully.');
    }
    public function show_details($id) {

        $post = Post::find($id);
        $path_id=$post->pathologie_id;
        $us_id=$post->user_id;
        $ind_id=$post->indication_id;
        $user = User::find($us_id);
        $indication = Indication::find($ind_id);
        $pathologie=Pathologie::find( $path_id);
        $propositions = DB::table('propositions')->join('classifications', 'propositions.classification_id', '=', 'classifications.id')
        ->join('users', 'propositions.user_id', '=', 'users.id')->join('medicaments', 'propositions.medicament_id', '=', 'medicaments.id')->join('categories', 'propositions.categorie_id', '=', 'categories.id')->join('posts', 'propositions.post_id', '=', 'posts.id')
    
        ->select('propositions.*', 'users.name', 'users.lastname','medicaments.nom_commercial','categories.name as cat','classifications.name as class')
        ->get();
        
                return view('details_demande', ['post' => $post,'pathologie'=>$pathologie,'user'=>$user,'indication'=>$indication,'propositions' => $propositions]);

     }
     public function store_prop(Request $request ,$id)
     {
        $proposition = new Proposition();
        $proposition->user_id =Auth::user()->id;
        $proposition->post_id = $id;
        $proposition->titre = $request->input('titre');
        $proposition->medicament_id = $request->input('medicament');
        $proposition->classification_id = $request->input('classification');
        $proposition->categorie_id = $request->input('categorie');
        $proposition->type= $request->input('type');
        $proposition->quantite= $request->input('quantite');
        $proposition->unite = $request->input('unite');
           $proposition->dure = $request->input('dure');
           $proposition->dures = $request->input('dures');
           if($request->input('matin')=="on"){
           $proposition->matin = 1;
        }else     $proposition->matin = 0;
        if($request->input('midi')=="on"){
            $proposition->midi = 1;
         }else     $proposition->midi = 0;
         if($request->input('soir')=="on"){
            $proposition->soir = 1;
         }else     $proposition->soir = 0;
    
           if($request->input('av')=="on"){
            $proposition->avant_coucher = 1;
         }else     $proposition->avant_coucher = 0;
        $proposition->user_id = Auth::user()->id;
        $proposition->descr = $request->input('description');
        $proposition->save();
        return back()->with('success','proposition envoyee.');
    
    
    }
    public function valide($id) {
        $prescription = Prescription::find($id);
        if($prescription->demande == 0) {
            $prescription->demande = "1";
        } 
        $prescription->save();
        return redirect()->back();
     
        $commentaire->save();

        return redirect()->back();
         return back()->with('success','Post created successfully.');
     }
    

}