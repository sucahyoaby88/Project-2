<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Users;
use App\User;
use App\Penjualan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use PDF;

class mobilcontroller extends Controller
{
    public function mobil(){
            $halaman = 'mobil';
            $mobil_list = Mobil::orderBy('id', 'asc')->paginate(5);
            $jumlah_mobil = Mobil::count();
        return view('mobil.index', compact('halaman', 'mobil_list', 'jumlah_mobil'));
    }

    public function create(){
        $halaman = 'mobil';
        $mobil = Mobil::all();
        return view('create.index', compact('halaman', 'mobil'));
        }

    public function store(Request $request){
    $gambar = $request->file('gambar');
	$nama_file = time()."_".$gambar->getClientOriginalName();
	$tujuan_upload = 'images2/images';
	$gambar->move($tujuan_upload,$nama_file);
    Mobil::create([
        'nama_mobil' => $request->nama_mobil,
        'harga_mobil' => $request->harga_mobil,
        'stock' => $request->stock,
        'gambar' => $nama_file,
    ]);
    return redirect('mobil');
    }

    public function show($id){
        $halaman = 'mobil';
        $mobil = Mobil::findOrFail($id);
        return view('detail.index', compact('halaman', 'mobil'));
    }

    public function edit($id){
        $halaman = 'mobil';
        $mobil = Mobil::findOrFail($id);
        return view('edit.index', compact('halaman', 'mobil'));
    }

    public function update($id, Request $request){
        $halaman = 'mobil';
        $mobil = Mobil::findOrFail($id);
        $mobil->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images2/images',$request->file('gambar')->getClientOriginalName());
            $mobil->gambar = $request->file('gambar')->getClientOriginalName();
            $mobil->save();
        }
        $mobil->save();
        return redirect('mobil');
    }

    public function delete($id){
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect('mobil');
    }

    public function cetak_pdf(){
        $mobil = Mobil::all();
        $pdf = PDF::loadview('cetak.index_pdf',['mobil'=>$mobil]);
        return $pdf->stream();
    }

    public function datamobil(){
        $halaman = 'mobil';
        $users = Users::all();
        $mobil_list = Mobil::orderBy('id', 'asc')->paginate(5);
        return view('datamobil.index', compact('halaman', 'mobil_list'));
    }
    
    public function formbuy($id){
        $halaman = 'user';
        $mobil = Mobil::findOrFail($id);
        $users = Users::all();
        return view('formbuy.index', compact('halaman', 'mobil' ,'users'));
    }

    public function store2(Request $request){
        Users::create($request->all());
        return redirect('datamobil/formbuy2');
        }

    public function formbuy2(){
            $halaman = 'penjualan';
            $admin = User::all();
            $mobil = Mobil::all();
            $users = Users::all();
            return view('formbuy2.index', compact('halaman', 'admin' ,'mobil' ,'users'));
        }

        public function struk($id){
            $penjualan = Penjualan::findOrFail($id);
            $pdf = PDF::loadview('struk.index_pdf',['penjualan'=>$penjualan]);
            return $pdf->stream();
        }
        
    public function store3(Request $request){
        
        Penjualan::create($request->all());
        $stock = Mobil::where('id','=', $request->id_mobil)->get();
        foreach ($stock as $s) {
        $hasil = $s->stock - $request->stock;
        $s->stock = $hasil;
        $s->save();
        }
        
        $harga_mobil = Users::where('id','=', $request->id_user)->get();
        foreach ($harga_mobil as $h) {
        $hasil = $h->harga_mobil * $request->stock;
        $h->total_harga = $hasil;
        $h->save();
        }

        return redirect('datamobil/transaksi');
        }

        public function transaksi(){
            $halaman = 'penjualan';
            $penjualan_list = Penjualan::orderBy('id', 'asc')->paginate(5);
            $jumlah_penjualan = Penjualan::count();
        return view('transaksi.index', compact('halaman', 'penjualan_list', 'jumlah_penjualan'));
    }
}