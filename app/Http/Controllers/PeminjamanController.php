<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman;
use App\petugas;
use App\pegawai;
use App\barang;
use PDF;

class PeminjamanController extends Controller
{
  public function datapinjam(){
    $halaman = 'datapinjam';
    $pinjam_list = peminjaman::orderBy('id')->paginate(15);
    $jumlah_pinjam = $pinjam_list->count();
    return view('datapinjam.index', compact('halaman','pinjam_list','jumlah_pinjam'));
  }

  public function cetak_pdf(){
    $pinjam = peminjaman::all();
    $pdf = PDF::loadview('datapinjam.index_pdf', compact('pinjam'));
    return $pdf->download();
  }

  public function create(){
    $halaman = 'datapinjam';
    $pinjam = peminjaman::all();
    $barang = barang::all();
    $petugas = petugas::all();
    $pegawai = pegawai::all();
    return view('datapinjam.create', compact('halaman', 'barang', 'petugas', 'pegawai'));
  }

  public function store(Request $request){
    // $pinjam = $request->tgl_pinjam;
    // // $timesum = date('Y-m-d', strtotime('+7days', strtotime($timesum)));
    // $pinjam->tgl_kembali = $timesum;
    // $pinjam->save();
    peminjaman::create($request->all());
    $stok = barang::where('id','=', $request->id_barang)->get();
    foreach ($stok as $s) {
      $hasil = $s->stok - 1;
      $s->stok = $hasil;
      $s->save();
    }
    return redirect('datapinjam');
  }

  public function show($id){
    $halaman = 'datapinjam';
    $pinjam = peminjaman::findOrFail($id);
    // return view('article.show',compact('article'));
    return view('datapinjam.show', compact('halaman', 'pinjam'));
  }

  public function kembali($id, Request $request){
    $halaman = 'datapinjam';
    $pinjam = peminjaman::findOrFail($id);
    $pinjam->tgl_kembali = $request->tgl_kembali;
    $pinjam->status = $request->status;
    $stok = barang::where('id','=', $request->id_barang)->get();
    foreach ($stok as $s) {
      $hasil = $s->stok + 1;
      $s->stok = $hasil;
      $s->save();
    }
    $pinjam->save();
    return redirect('datapinjam');
  }

  public function form_kembali($id){
    $halaman = 'datapinjam';
    $pinjam = peminjaman::findOrFail($id);
    return view('datapinjam.form-kembali', compact('halaman', 'pinjam'));
  }

  public function delete($id){
    $pinjam = peminjaman::findOrFail($id);
    $pinjam->delete();
      return redirect('datapinjam');
    }


}
