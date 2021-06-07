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
use App\commentaire;
use App\productstock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrescriptionController extends Controller
{
    public function accueil() {
        $classifications=Classification::All();
        $medicaments=Medicament::All();
        $pathologies=Pathologie::All();
        $categories=Categorie::All();
             return view('home', ['classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories]);
         }
    public function barrerecherche(Request $request) {
           $c=$request->get('classification');
            $ca=$request->get('categorie');
            $p=$request->get('pathologie');
            $m=$request->get('medicament');
            $a=$request->get('age');
            $po=$request->get('poids');
            $prescriptions = DB::table('prescriptions')->join('classifications', 'prescriptions.classification_id', '=', 'classifications.id')->join('pathologies', 'prescriptions.pathologie_id', '=', 'pathologies.id')
            ->join('users', 'prescriptions.user_id', '=', 'users.id')->join('medicaments', 'prescriptions.medicament_id', '=', 'medicaments.id')->join('categories', 'prescriptions.categorie_id', '=', 'categories.id')
            ->where('medicament_id','=',$m)->where('prescriptions.categorie_id','=',$ca)->where('prescriptions.etat','=',"1")
            ->where('prescriptions.classification_id','=',$c)->where('pathologie_id','=',$p)->where('age','=',$a)->where('poids','=',$po)
            ->select('prescriptions.*', 'users.name', 'users.lastname','medicaments.DCI','pathologies.name as path','classifications.name as class')
            ->paginate(10);
         
            $classifications=Classification::All();
            $medicaments=Medicament::All();
            $pathologies=Pathologie::All();
            $categories=Categorie::All();
            return view('prescriptionlist', ['prescriptions' => $prescriptions,'classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories]);
}
public function liste(Request $request) {
    $prescriptions = DB::table('prescriptions')->join('classifications', 'prescriptions.classification_id', '=', 'classifications.id')->join('pathologies', 'prescriptions.pathologie_id', '=', 'pathologies.id')
    ->join('users', 'prescriptions.user_id', '=', 'users.id')->join('medicaments', 'prescriptions.medicament_id', '=', 'medicaments.id')->join('categories', 'prescriptions.categorie_id', '=', 'categories.id')

    ->select('prescriptions.*', 'users.name', 'users.lastname','medicaments.DCI','pathologies.name as path','classifications.name as class')
    ->paginate(10);
 
    $classifications=Classification::All();
    $medicaments=Medicament::All();
    $pathologies=Pathologie::All();
    $categories=Categorie::All();
     return view('prescriptionlist', ['prescriptions' => $prescriptions,'classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories]);
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
    $references = ProductStock::where('pre_id',$prescription->id)->get();
    $commentaires = DB::table('commentaires')
    ->join('users', 'commentaires.user_id', '=', 'users.id')->where('commentaires.prescription_id', '=',$prescription->id)   ->select('users.*', 'commentaires.*')->get();
        return view('prescription_details', ['prescription' => $prescription,'classification'=>$classification,'pathologie'=>$pathologie,'medicament'=>$medicament,'user'=>$user,'indication'=>$indication,'commentaires'=>$commentaires,'references'=>$references]);
}

public function create()
{
    $classifications=Classification::All();
    $medicaments=Medicament::All();
    $pathologies=Pathologie::All();
    $categories=Categorie::All();
    $indications=Indication::All();
    return view('new_prescription', ['classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories,'indications'=>$indications]);
}
public function store(Request $request){
    $prescription = new Prescription();

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
    $prescription->descr = $request->input('description');
    $prescription->save();
    return view('addMore', ['prescription' => $prescription]);

}
public function valide($id) {
    $prescription = Prescription::find($id);
    if($prescription->demande == 0) {
        $prescription->demande = "1";
    } 
    $prescription->save();
    return redirect()->back();
}


public function recherchetype(Request $request) {
    $prescriptions = DB::table('prescriptions')->join('classifications', 'prescriptions.classification_id', '=', 'classifications.id')->join('pathologies', 'prescriptions.pathologie_id', '=', 'pathologies.id')
    ->join('users', 'prescriptions.user_id', '=', 'users.id')->join('medicaments', 'prescriptions.medicament_id', '=', 'medicaments.id')->join('categories', 'prescriptions.categorie_id', '=', 'categories.id')

    ->select('prescriptions.*', 'users.name', 'users.lastname','medicaments.DCI','pathologies.name as path','classifications.name as class')
    ->paginate(5);
    $classifications=Classification::All();
    $medicaments=Medicament::All();
    $pathologies=Pathologie::All();
    $categories=Categorie::All();
    $q=$request->get('customRadio');
    $v=$request->get('customRadio1');
   
        
    return view('prescriptionlist', ['prescriptions' => $prescriptions,'classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories]);
        }

        public function edit($id)
        {
            $prescription = Prescription::find($id);
            $classifications=Classification::All();
            $medicaments=Medicament::All();
            $pathologies=Pathologie::All();
            $categories=Categorie::All();
            $indications=Indication::All();
            return view('edit_pre',['classifications' => $classifications,'medicaments'=>$medicaments,'pathologies'=>$pathologies,'categories'=>$categories,'indications'=>$indications,'prescription'=>$prescription]);
        
        }
        public function aide(Request $request) {
           
             return view('aide');
        }

}
