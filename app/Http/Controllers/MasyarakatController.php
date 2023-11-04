<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index(){
        return view('masyarakat.registrasi');
    }  
    public function registrasi(){
        return view('masyarakat.registrasi');
    }

    public function layoutmasyarakat(){
        return view('masyarakat.layoutmasyarakat');
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
            return back()->with('pesan','registrasi berhasil');
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
            session(['username'=>$request->input('username')]);
            return redirect('layoutmasyarakat');
        }
        return back()->with('pesan','Username dan password tidak terdaftar hyung noona');
    }

    
    public function pengaduan(){
        return view('masyarakat.pengaduan');
    }
    public function cekPengaduan(Request $request){
        $m = new Pengaduan();
        // $cek = $request->validate([
        //     'nik'=>'required|max:16',
        //     'isi_laporan'=>'required',
        //     'tgl_pengaduan'=>'required'
        // ]);
        
         // siapkan variable untuk menampung file
         $foto = $request->file('foto');

         // tentukan path file akan disimpan
         $folder = 'upload_data';
 
         // pindahkan file ke target folder
         $foto->move($folder, $foto->getClientOriginalName());

         $m->create([
            'nik'=>$request->input('nik'),
            'tgl_pengaduan'=>date('Y-m-d'),
            'foto'=>$foto->getClientOriginalName(),
            'isi_laporan'=>$request->input('isi_laporan'),
            'status'=>'0'
         ]);
         return back()->with('pesan','Selamat, laporan terkirim');

        
    }
    
}

    
