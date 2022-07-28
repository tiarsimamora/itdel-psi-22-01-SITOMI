<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view ("login");
    }
    public function indexsignup()
    {
        return view ("/signup");
    }

    public function indexprofile($id_pengguna)
    {
        $alluser = User::find($id_pengguna);
        return view ("profile", compact("alluser"),[
            'title' => 'Profil'
        ]);
    }
    
    public function indexeditprofile($id_pengguna)
    {
        $alluser = User::find($id_pengguna);
        return view('edit_profile', [
            'alluser'=> $alluser,
            'title' => 'Edit Profile'
        ]);    
    }

    public function updateedituser(Request $request)
    {
        $alluser = User::find($request->id_pengguna);
        if($request->hasfile('image')){
            $newImageName = time().'-'.$request->name . '.'.$request->image->extension();
            $request->image->move(public_path('assets/images/user/'), $newImageName);
            $alluser->image = $newImageName;
        }
        $alluser->username=$request->username;
        $alluser->nama_pengguna=$request->nama_pengguna;
        $alluser->no_telp=$request->no_telp;

        $alluser->save();
        return redirect()
        ->back()
        ->with('success', 'Perubahan berhasil dilakukan!'); 
    }

    public function signupdata(Request $request)
    {
        User::create([
            'username' => $request-> username,
            'password' => Hash::make($request-> password),
            'nama_pengguna' => $request-> nama_pengguna,
            'no_telp' => $request-> no_telp,
            'role' => $request-> role,
        ]);     
        // return view ("/login")->with('message', 'The success message!');
        return redirect()
        ->back()
        ->with('success', 'Telah berhasil mendaftar !');
    }

    public function asadmin($id_pengguna)
    {
        $alluser = User::find($id_pengguna);
        $alluser-> role = 'admin';
        $alluser->save();
        return redirect()->back();
    }

    public function askasir($id_pengguna)
    {
        $alluser = User::find($id_pengguna);
        $alluser-> role = 'kasir';
        $alluser->save();
        return redirect()->back();
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            
            // $request->session()->regenerate();

            $dataUser = User::all();
            foreach ($dataUser as $d){
                if($d->username == $request->username){
                    if ($d->role == 'admin'){
                        return redirect()->intended('/dashboard_admin');
                    }
                    elseif ($d->role == 'kasir'){
                        return redirect()->intended('/dashboard_kasir');
                    }
                    elseif ($d->role == NULL){
                        return redirect()->intended('/dashboard_pembeli');
                    }
                }
            }
        }

        return back();
    }

    // public function logout()
    // {
    // Auth::logout();
    //     request()->session()->invalidate();
    //     request()->session()->regenerateToken();
    //     return redirect('/');
    // }

}