<?php

namespace App\Http\Controllers;
use Hash;
use Auth;
use Session;
use App\user;
use App\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfilesController extends Controller
{
    public function index($id)
    {
        $user = User::where('id', $id)->first();
       
        $prescriptions = DB::table('prescriptions')->join('classifications', 'prescriptions.classification_id', '=', 'classifications.id')->join('pathologies', 'prescriptions.pathologie_id', '=', 'pathologies.id')
        ->join('users', 'prescriptions.user_id', '=', 'users.id')->join('medicaments', 'prescriptions.medicament_id', '=', 'medicaments.id')->join('categories', 'medicaments.categorie_id', '=', 'categories.id')
        ->where('users.id','=',Auth::user()->id)
        ->select('prescriptions.*', 'users.name', 'users.lastname','medicaments.nom_commercial','pathologies.name as path','classifications.name as class')
        ->get();
            return view('profiles.profile', ['user'=>$user,'prescriptions'=>$prescriptions]);
    }
    public function edit()
    {
        return view('profiles.edit')->with('info', Auth::user());
    
    }
    public function update(Request $r)
    {
        $this->validate($r, [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'etablissement' => 'required',
            'profession' => 'required'
        ]);
        Auth::user()->update([
            'name' => $r->name,
            'lastname' => $r->lastname,
            'email' => $r->email,
            'phone' => $r->phone,
            'etablissement' => $r->etablissement,
            'profession' => $r->profession
        ]);
        if(request()->has('avatar')){
            $avataruploaded = request()->file('avatar');
            $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/users/');
            $avataruploaded->move($avatarpath,$avatarname);
            Auth::user()->update([
                'avatar' => '/images/users/' .$avatarname
            ]);
        }
        Session::flash('success', 'Profile updated.');
        return redirect()->back();}
        public function changePasswordForm()
        {
            if(Auth::user()->admin == 0){
            return view('profiles.changepassword') ->with('info', Auth::user());}
           
        }
        public function changePassword(Request $request)
        {
            if(!(Hash::check($request->get('current_password'), Auth::user()->password))){

                return back()->with('error','votre mot de passe actuel ne correspond pas à ce que vous avez fourni');
            }
            if(strcmp($request->get('current_password'),$request->get('new_password'))==0)
            {
                return back()->with('error','votre mot de passe actuel ne peut pas être le même que le nouveau mot de passe');
            }
            $request->validate([
            'current_password'=>'required',
            'new_password'=>'required|string|min:8|confirmed'
            ]);
            $user =Auth::user();
            $user->password=bcrypt($request->get('new_password'));
            $user->save();
           return back()->with('message','Le mot de passe a été changé avec succès');
           
                
        }
        public function refuser(Request $request,$id)
        { $user = User::where('id', $id)->first();
         
            $prescriptions = DB::table('prescriptions')
            ->where('prescriptions.how', '=',1) 
            ->select('prescriptions.*')
            ->get();
         
             return view('profiles.refus', ['prescriptions' => $prescriptions,'user'=>$user]);
           
                
        }
}
