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
        if ($satu->where('nik',$request->input('nik'))->where('username',$request->input('username'))->exists()){
            return redirect('masyarakat/dashboard');
        }
        return back()->with('pesan','registrasi gagal');
    }

    public function login(){
        return view('masyarakat.login');
    }  
    public function cekLogin(Request $request){
        $m = new Masyarakat();
        // cek username dan password exist (ada) di tabel masyarakat
        if ($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('masyarakat/dashboard');
        }
        return back()->with('pesan','Username dan password tidak terdaftar hyung noona');
    } 

    public function pengaduan(){
        return view('masyarakat.pengaduan');
    }
    public function cekPengaduan(Request $request){
        $m = new Masyarakat();
        $cek = $request->validate([
            'id_pengaduan'=>'required|unique:pengaduan|max:10',
            'nik'=>'required|unique:pengaduan|max:16',
            'nama'=>'required|max:16',
            'foto'=>'required',
            'isi_laporan'=>'required|min:10',
            'tanggal'=>'required|max:15'
        ]);
        $m->create($request->all());
        if ($m->where('id_pengaduan',$request->input('id_pengaduan'))->exists()){
            return redirect('masyarakat/validasi');
        }
        return back()->with('pesan','Selamat, laporan berhasil');
    }
    public function LayoutUtama(){
        return view('LayoutUtama');
    }

    public function admindash(){
        return view('masyarakat.admindash');
    }

    public function validasi(){
        return view('masyarakat.validasi');
    }
    public function cekValidasi(Request $request){
        $m = new Masyarakat();
        $cek = $request->validate([
            'nik'=>'required|unique:tanggapan|max:16',
            'nama'=>'required|max:16',
            'foto'=>'required',
            'isi_laporan'=>'required|min:50',
            'tanggal'=>'required|max:15'
        ]);
        $m->create($request->all());

        return back()->with('pesan','Selamat, validasi berhasil');
    
    }
    public function petugas(){
        return view('masyarakat.petugas');
    }
    public function cekPetugas(Request $request){
        $m = new Masyarakat();
        $cek = $request->validate([
            'nama_petugas'=>'required|max:16',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13',
            'level'=>'required|max:10'
        ]);
        $m->create($request->all());

        return back()->with('pesan','Selamat, validasi berhasil');
    
    }


}

    
