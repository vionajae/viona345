<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //admin
    public function adminlogin(){
        return view('admin.login');
    }
    public function cekadminlogin(Request $request){
        $p = new petugas();
        if($p->where('username',$request->input('username'))->where('password',$request->input('password')) ->exists()){
         $petugas = $p->first();
            session(['petugas'=>$petugas]);
         return redirect('petugas');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
    } 
    public function LayoutUtama(){
        return view('LayoutUtama');
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
            'telp'=>'required|max:13'
        ]);
        $m->create($request->all());
        if ($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return back()->with('pesan','registrasi berhasil');
        }
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
    public function logout(){
        session()->flush();
        return back();
    }
}
