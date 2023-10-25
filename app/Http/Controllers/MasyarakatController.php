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
            return redirect('layoutmasyarakat');
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
            return redirect('layoutmasyarakat');
        }
        return back()->with('pesan','Username dan password tidak terdaftar hyung noona');
    }

    //admin
    public function adminlogin(){
        return view('admin.login');
    }  
    public function cekadminlogin(Request $request){
        $m = new Petugas();
        if ($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('LayoutUtama');
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
        //     'foto'=>'unique',
        //     'isi_laporan'=>'required|min:10',
        //     'tgl_pengaduan'=>'unique'
        // ]);
        $m->create($request->all());
        return back()->with('pesan','Selamat, pengaduan terkirim');
    }
    public function LayoutUtama(){
        return view('LayoutUtama');
    }

    public function validasi(){
        $m = new Pengaduan();
        return view('Admin.validasi',['data'=>$m->all()]);
    }
    public function cekValidasi(Request $request){
        $m = new Pengaduan();
        $cek = $request->validate([
            'nik'=>'required|max:16',
            'foto'=>'unique',
            'isi_laporan'=>'required|min:10',
            'tgl_pengaduan'=>'unique'
        ]);
        $m->create($request->all());

        return back()->with('pesan','Selamat, validasi berhasil');
    
    }
    public function petugasatu(){
        return view('admin.petugas');
    }
    public function registrasiadmin(){
        return view('admin.registrasi');
    }
    public function simpanadmin(Request $request){
        $m = new Petugas();
        $cek = $request->validate([
            'nama_petugas'=>'required|max:16',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13',
            'level'=>'unique'
        ]);
        $m->create($request->all());
        if ($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('LayoutUtama');
        }
    
    }
    public function cekPetugas(Request $request){
        $m = new Petugas();
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
    public function tanggapan(){
        return view('admin.tanggapan');
    }
    public function cekTanggapan(Request $request){
        $m = new Tanggapan();
        $cek = $request->validate([
            'id_tanggapan'=>'required|unique:tanggapan|max:16',
            'id_pengaduan'=>'required|max:16',
            'tgl_tanggapan'=>'required',
            'id_petugas'=>'required|min:3'
        ]);
        $m->create($request->all());

        return back();
    
    }
    public function logout(){
        session()->flush();
        return back();
    }

}

    
