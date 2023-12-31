<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
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
         return redirect('LayoutUtama');
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
    public function tanggapan(){
        $m = new Tanggapan();
        return view('admin.tanggapan',['data'=>$m->all()]);
    }
    public function cekTanggapan(Request $request){
        $m = new Tanggapan();
        $cek = $request->validate([
            'tgl_pengaduan'=>date('Y-m-d'),
            'tanggapan'=>'required|min:5'
        ]);
        $m->create($request->all());
        return back();
    }
    public function logout(){
        session()->flush();
        return back();
    }
    public function status($id){
        $lapor = new Pengaduan();
        $lapor->find($id)->update(['status'=>'proses']);
        return back();
    }
    public function laporan(){
        $m = new Pengaduan();
        return view('admin.laporan',['data'=>$m->all()]);
    }
    public function ceklaporan(Request $request){
        $m = new Pengaduan();
        $cek = $request->validate([
            'nik'=>'required|max:16',
            'foto'=>'unique',
            'isi_laporan'=>'required|min:10',
            'tgl_pengaduan'=>'unique'
        ]);
        $m->create($request->all());
        return back();
    }
}
