<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function registrasi(){
        return view('masyarakat.registrasi');
    }  
        
    public function simpan(Request $request){
        $satu = new Masyarakat();
        // $satu->create([
        //     'nik'=>$request->nik,
        //     'nama'=>$request->nama,
        //     'username'=>$request->username,
        //     'password'=>$request->password,
        //     'telp'=>$request->telp,
        // ]);
        
        // cek data yang dikirim
        $cek = $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);
        $satu->create($request->all());

        return back()->with('pesan','Selamat, registrasi berhasil');
    }

    public function login(){
        return view('masyarakat.login');
    }  
    public function cekLogin(Request $request){
        $m = new Masyarakat();
        // cek username dan password exist (ada) di tabel masyarakat
        if ($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('/');
        }
        return back()->with('pesan','Username dan password tidak terdaftar hyung noona');
    } 

    public function laporan(){
        return view('masyarakat.laporan');
    }
    public function cekLaporan(Request $request){
        $m = new Masyarakat();
        $cek = $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required|max:16',
            'foto'=>'required',
            'isi_laporan'=>'required|min:50',
            'tanggal'=>'required|max:15'
        ]);
        $m->create($request->all());

        return back()->with('pesan','Selamat, laporan berhasil');
    
    }
    public function dashboard(){
        return view('masyarakat.dashboard');
    }
    public function validasi(){
        return view('masyarakat.validasi');
    }
    public function cekValidasi(Request $request){
        $m = new Masyarakat();
        $cek = $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required|max:16',
            'foto'=>'required',
            'isi_laporan'=>'required|min:50',
            'tanggal'=>'required|max:15'
        ]);
        $m->create($request->all());

        return back()->with('pesan','Selamat, validasi berhasil');
    
    }

}

    
