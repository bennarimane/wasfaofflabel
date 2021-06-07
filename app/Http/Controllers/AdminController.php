<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Prescription;
use App\Classification;
use App\Pathologie;
use App\Medicament;
use App\Indication;
use App\Commentaire;
use App\Categorie;
use App\Post;
use App\Proposition;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use \App\Mail\SendMail;
class AdminController extends Controller
{
    public function affichage() {
        
    
        $list = User::where('admin','=','0')->get();

      return view('admin.utilisateurs',['lists' => $list]);
  }
  public function index() {
    return view('admin.user_list');
}

public function userFetchList() {
    $users = User::all();
    echo json_encode($users);  
}
public function active_deactive_user($id) {
    $user = User::find($id);
    if($user->isban == "nouveau") {
        $user->isban = "valide";
       
            $details = [
                'title' => 'Activation de compte',
                'body' =>'Votre compte a été activé'
           ];
    
           \Mail::to($user->email)->send(new SendMail($details));}

    
    elseif($user->isban == "bloque") {
        $user->isban = "valide";
    } 
    else {
        $user->isban = "bloque";
        $details = [
            'title' => 'Désactivation de compte',
            'body' =>'Votre compte a été désactivé'
       ];

       \Mail::to($user->email)->send(new SendMail($details));
    }
    $user->save();
    return redirect()->back();
}
public function show($id) {

    $user = User::find($id);
    $prescriptions = DB::table('prescriptions')->join('classifications', 'prescriptions.classification_id', '=', 'classifications.id')->join('pathologies', 'prescriptions.pathologie_id', '=', 'pathologies.id')
    ->join('users', 'prescriptions.user_id', '=', 'users.id')->join('medicaments', 'prescriptions.medicament_id', '=', 'medicaments.id')->join('categories', 'prescriptions.categorie_id', '=', 'categories.id')
    ->where('prescriptions.user_id','=',$id)
    ->select('prescriptions.*', 'users.name', 'users.lastname','medicaments.DCI','pathologies.name as path','classifications.name as class')->get();
    $commentaires= DB::table('commentaires')->join('prescriptions', 'commentaires.prescription_id', '=', 'prescriptions.id')->join('users', 'commentaires.user_id', '=', 'users.id')->where('commentaires.user_id','=',$id)->select('commentaires.*', 'users.name', 'users.lastname', 'prescriptions.titre')->get();
   
 return view('admin.details_user', ['user' => $user,'prescriptions'=>$prescriptions,'commentaires'=>$commentaires]);}


 public function valide() {
        
    $list= DB::table('prescriptions')->join('pathologies', 'prescriptions.pathologie_id', '=', 'pathologies.id')->join('users', 'prescriptions.user_id', '=', 'users.id')
    ->select('prescriptions.*', 'pathologies.name','users.lastname')
    ->where('demande','=',1)->where('prescriptions.etat','=',0)->get();

  return view('admin.demande',['lists' => $list]);
}

public function details($id) {
    $prescription = Prescription::find($id);
    $class_id=$prescription->classification_id;
    $path_id=$prescription->pathologie_id;
    $med_id=$prescription->medicament_id;
    $us_id=$prescription->user_id;
    $classification = Classification::find($class_id);
    $pathologie = Pathologie::find($path_id);
    $ind_id=$pathologie->indication_id;
    $medicament = Medicament::find($med_id);
    $user = User::find($us_id);
    $indication = Indication::find($ind_id);
        return view('admin/pres_details', ['prescription' => $prescription,'classification'=>$classification,'pathologie'=>$pathologie,'medicament'=>$medicament,'user'=>$user,'indication'=>$indication]);
}
public function active_deactive_pres($id) {
    $prescription = Prescription::find($id);
    $user=User::find($prescription->user_id);
    if($prescription->etat == 0 &&  $prescription->demande==1) {
        $prescription->etat=1;
        $details = [
            'title' => 'validation de préscription',
            'body' =>'Votre préscription a été validéé'
       ];

       \Mail::to($user->email)->send(new SendMail($details));
    }
   
    $prescription->save();
    return redirect()->back();
}
public function store($id , Request $request) {
    $prescription = Prescription::find($id);
    
    if($prescription->etat == 0 &&  $prescription->demande==1) {
       
       $prescription->demande=0;
        $prescription->motif = $request->input('motif');
        $prescription->how = 1;
        
    }
   
    $prescription->save();
    session()->flash('success', 'Le motif de refus a été bien envoyé!!');
    return redirect()->back();
}
public function destroyCom(Request $request,$id){
    $listcom= Commentaire::find($id);
    $listcom->delete();
    return redirect()->back();


}
public function destroyPres(Request $request,$id){
    $listpres= Prescription::find($id);
    $listpres->delete();
    return redirect()->back();


}
public function liste() {
    $prescriptions = DB::table('prescriptions')->join('classifications', 'prescriptions.classification_id', '=', 'classifications.id')->join('pathologies', 'prescriptions.pathologie_id', '=', 'pathologies.id')
    ->join('users', 'prescriptions.user_id', '=', 'users.id')->join('medicaments', 'prescriptions.medicament_id', '=', 'medicaments.id')->join('categories', 'prescriptions.categorie_id', '=', 'categories.id')

    ->select('prescriptions.*', 'users.name', 'users.lastname','medicaments.DCI','pathologies.name as path','classifications.name as class')
    ->paginate(10);
    

    $classifications=Classification::All();
    $medicaments=Medicament::All();
    $pathologies=Pathologie::All();
    $categories=Categorie::All();
     return view('admin/prescription_list', ['prescriptions' => $prescriptions,'classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories]);
}

public function validation($id) {
    $prescription = Prescription::find($id);
    $class_id=$prescription->classification_id;
    $path_id=$prescription->pathologie_id;
    $med_id=$prescription->medicament_id;
    $us_id=$prescription->user_id;
    $classification = Classification::find($class_id);
    $pathologie = Pathologie::find($path_id);
    $ind_id=$pathologie->indication_id;
    $medicament = Medicament::find($med_id);
    $user = User::find($us_id);
    $indication = Indication::find($ind_id);
        return view('admin/validation', ['prescription' => $prescription,'classification'=>$classification,'pathologie'=>$pathologie,'medicament'=>$medicament,'user'=>$user,'indication'=>$indication]);
}
public function valide_pres($id) {
    $prescription = Prescription::find($id);
 
        $prescription->valide=1;
        $prescription->created_at=date('Y-m-d H:i:s');
        
   
   
    $prescription->save();
    return redirect()->back();
}
public function supprimer(Request $request,$id){
    $listpres= Prescription::find($id);
    $listpres->delete();
    return view('admin/dashboard');


}
public function edit_pres($id)
{
    $prescription = Prescription::find($id);
    $classifications=Classification::All();
    $medicaments=Medicament::All();
    $pathologies=Pathologie::All();
    $categories=Categorie::All();
    $indications=Indication::All();
    return view('admin/modifier_pres',['classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories,'indications'=>$indications,'prescription'=>$prescription]);

}


public function update_pres(Request $request, $id){
    $prescription = Prescription::find($id);

    $prescription->titre = $request->input('titre');
    $prescription->medicament_id = $request->input('medicament');
    $prescription->classification_id = $request->input('classification');
    $prescription->pathologie_id = $request->input('pathologie');
    $prescription->indication_id = $request->input('indication');
    $prescription->categorie_id = $request->input('categorie');
    $prescription->age = $request->input('age');
    $prescription->poids= $request->input('poids');
    $prescription->type= $request->input('type');
    $prescription->quantite= $request->input('quantite');
    $prescription->unite = $request->input('unite');
       $prescription->dure = $request->input('dure');
       $prescription->dures = $request->input('du');
       if($request->input('matin')=="on"){
       $prescription->matin = 1;
    }else     $prescription->matin = 0;
    if($request->input('midi')=="on"){
        $prescription->midi = 1;
     }else     $prescription->midi = 0;
     if($request->input('soir')=="on"){
        $prescription->soir = 1;
     }else     $prescription->soir = 0;

       if($request->input('av')=="on"){
        $prescription->avant_coucher = 1;
     }else     $prescription->avant_coucher = 0;
    $prescription->user_id = Auth::user()->id;
    $prescription->descr = $request->input('descr');
    $prescription->save();
    session()->flash('success', 'La prescription  à bien  été bien Modifié!!');
    return redirect()->back();
   

}
public function list()
{
    $posts = Post::all();
    return view('admin/avis_list',compact('posts'));    
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
    ->where('post_id','=',$post->id)
    ->select('propositions.*', 'users.name', 'users.lastname','medicaments.nom_commercial','categories.name as cat','classifications.name as class')
    ->get();
    
            return view('admin/avis_details', ['post' => $post,'pathologie'=>$pathologie,'user'=>$user,'indication'=>$indication,'pathologie'=>$pathologie,'propositions' => $propositions]);

 }
 public function transfer(Request $request,$id){
    $post = Post::find($id);
    $prescription= new Prescription();
    $prescription->user_id =Auth::user()->id;
    if ($request->input('proposition')==0){
   $prescription->titre = $request->input('nom');
   $prescription->pathologie_id = $post->pathologie_id;
   $prescription->indication_id = $post->indication_id;
    $prescription->medicament_id = $request->input('medicament');
    $prescription->classification_id = $request->input('classification');
    $prescription->categorie_id = $request->input('categorie');
    $prescription->age = $post->age;
    $prescription->poids= $post->poids;
    $prescription->type= $request->input('type');
    $prescription->quantite= $request->input('quantite');
    $prescription->unite = $request->input('unite');
       $prescription->dure = $request->input('dure');
       $prescription->dures = $request->input('dures');
       if($request->input('matin')=="on"){
       $prescription->matin = 1;
    }else     $prescription->matin = 0;
    if($request->input('midi')=="on"){
        $prescription->midi = 1;
     }else     $prescription->midi = 0;
     if($request->input('soir')=="on"){
        $prescription->soir = 1;
     }else     $prescription->soir = 0;

       if($request->input('av')=="on"){
        $prescription->avant_coucher = 1;
     }else     $prescription->avant_coucher = 0;
    $prescription->user_id = Auth::user()->id;
    $prescription->descr = $request->input('description');
    $prescription->save();}
else{
    $proposition = Proposition::find($request->input('proposition'));
    $prescription->titre = $request->input('nom');
    $prescription->pathologie_id = $post->pathologie_id;
    $prescription->indication_id = $post->indication_id;
     $prescription->medicament_id = $proposition->medicament_id; 
     $prescription->classification_id = $proposition->classification_id; 
     $prescription->categorie_id = $proposition->categorie_id; 
     $prescription->age = $post->age;
     $prescription->poids= $post->poids;
     $prescription->type=  $proposition->type; 
     $prescription->quantite= $proposition->quantite; 
     $prescription->unite =  $proposition->unite;
        $prescription->dure =$proposition->dure;
        $prescription->dures =$proposition->dures;
     $prescription->matin =$proposition->matin;
         $prescription->midi = $proposition->midi;
         $prescription->soir =$proposition->soir;
       
         $prescription->avant_coucher = $proposition->avant_coucher;
     $prescription->user_id = Auth::user()->id;
     $prescription->descr = $proposition->descr;
     $prescription->save();




}
    
    return back()->with('message','la transformation a été effectuée avec succès');
   
}
}




