<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Staff;
use App\Appointment;
use App\Consultation;
use App\Analysis;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    public function edit_staff($id){
        $staff = Staff::find($id);//on recupere le produit
        return view('admin.edit_staff', compact('staff'));
    }
    public function store(Request $request)
        {           
           $staff = new Staff();
           $staff->nom_staff = $request->input('nom');
           $staff->prenom_staff = $request->input('prenom');
           $staff->sexe_staff = $request->input('genre');
           $staff->specialite_staff = $request->input('specialite');
           $staff->telephone_staff = $request->input('phone');
           $staff->adresse_staff = $request->input('adresse');
           $staff->cnipass_staff = $request->input('cni');
           $staff->poste_staff = $request->input('poste');
           $staff->email_staff = $request->input('email');
           $staff->save();
        ///////////////////////////////////////////////////
        /////////////////////////////////////////////////////
           $user= new User();
           $user->name= $staff->prenom_staff;
           $user->email=strtolower($staff->nom_staff).".".strtolower(str_replace(" ", "",$staff->prenom_staff))."@medilife.sn";
           $user->password=Hash::make("medilife2020");
           $user->staff_id=$staff->id;
           if(strtolower($staff->poste_staff)=='medecin'){
                $user->profil="medecin";
           }
           elseif(strtolower($staff->poste_staff)=='secretaire'){
                $user->profil="secretaire";
            }
            else{
                $user->profil="user";
            }
           $user->save();

           return redirect('/admin/staff')->with(['success' => "Personnel Enregistré"]);
        }
        public function liste_staff(){
            $staffs = Staff::all();
            return view('admin.liste_staff', compact('staffs'));
        }
        public function destroy($id)
        {
            $staff = Staff::find($id);
            $user= DB::table('users')->where('staff_id',$staff->id)->delete();
            dd($user,$staff,$id);
            if($staff && $user){ 
                //$user->delete();
                //dd($user,$staff,$id);
                $staff->delete();
                //dd($user,$staff,$id);
                return redirect('/admin/staff')->with(['success' => "Personnel Supprimé"]);
            }
            elseif($staff && !$user){
                $staff->delete();
                return redirect('/admin/staff')->with(['success' => "Personnel Supprimé"]);
            }else{
                return redirect('/admin/staff')->with(['success' => "Personnel Supprimé"]);
            }
        }

        public function update(Request $request, $id)
        {
            $staff = Staff::find($id);
            if($staff){
                $staff->update([
                    'nom_staff' => $request->input('nom'),
                    'prenom_staff' => $request->input('prenom'),
                    'specialite_staff' => $request->input('specialite'),
                    'profession_staff' => $request->input('profession'),
                    'telephone_staff' => $request->input('phone'),
                    'adresse_staff' => $request->input('adresse'),
                    'cnipass_staff' => $patient->input('cni'),
                    'poste_staff' => $request->input('poste'),
                    'emailprof_staff' => $patient->input('email'),
                ]);
            }
            return redirect('/secretaire/liste')->with(['success' => "Patient Modifié"]);
        }
        public function deconnect(){
            Auth::logout();
            return view('acceuil');
        }

        public function afficher_staff($id){
            //on recupere le produit
            $user= User::where('staff_id',$id)->first();
            $consultations= Consultation::where('staff_id',$id)->get();
            $rendezvous= Appointment::where('staff_id',$id)->get();
            $staffs = Staff::find($id);
        
            return view('admin.afficher_staff', compact('staffs','rendezvous','consultations','user'));
        }

        public function afficher_medecin(){
            //on recupere le produit
            $user= Auth::user();
            $consultations= Consultation::where('staff_id',$user->staff_id)->get();
            $rendezvous= Appointment::where('staff_id',$user->staff_id)->get();
            $staffs = Staff::find($user->staff_id);
        
            return view('medecin.mon_profil', compact('staffs','rendezvous','consultations','user'));
        }

        public function afficher_secretaire(){
            //on recupere le produit
            $user= Auth::user();
            $staffs = Staff::find($user->staff_id);
        
            return view('secretaire.profil_secretaire', compact('staffs','user'));
        }
       
        public function mes_rv(){
            $user=Auth::user();
            $rv=Appointment::where('staff_id',$user->staff_id)->get();
            //dd($rv);
            return view('medecin.rv_medecin',compact('rv'));
        }
        public function update_password_medecin(Request $request,$id)
        {
            
            $user = User::find($id);
            $consultations= Consultation::where('staff_id',$user->staff_id)->get();
            $rendezvous= Appointment::where('staff_id',$user->staff_id)->get();
            $staffs = Staff::find($user->staff_id);
            $password=$request->input('password');
            $confirme=$request->input('confirme');
            if($user && $password==$confirme){
                $user->update([
                    'password' => Hash::make($password)
                ]);
          
                return view('/medecin/mon_profil',compact('user','consultatios','rendezvouz','staffs'))->with(['success' => "Mot de passe Modifié"]);
            }
            else{
                return view('/medecin/mon_profil',compact('user','consultatios','rendezvouz','staffs'))->with(['danger' => "Veuiller verifier la conformité des deux mot de passe"]);
            }
        }

        public function update_password_secretaire(Request $request,$id)
        {
            $user = User::find($id);
            $staffs=Staff::find($user->staff_id);
            $password=$request->input('password');
            $confirme=$request->input('confirme');
            if($user && $password==$confirme){
                $user->update([
                    'password' => Hash::make($password)
                ]);
           
                return view('/secretaire/profil_secretaire',compact('user','staffs'))->with(['success' => "Mot de passe Modifié"]);
            }
            else{
                return view('/secretaire/profil_secretaire',compact('user','staffs'))->with(['danger' => "Veuiller verifier la conformité des deux mot de passe"]);
            }
        }
}
