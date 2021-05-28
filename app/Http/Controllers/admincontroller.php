<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use PDF;

class admincontroller extends Controller
{
    public function admin(){
        $halaman = 'users';
        $admin_list = User::orderBy('id', 'asc')->paginate(5);
        $jumlah_admin = User::count();
    return view('admin.index', compact('halaman', 'admin_list', 'jumlah_admin'));
}

public function edit($id){
    $halaman = 'users';
    $admin = User::findOrFail($id);
    return view('editadmin.index', compact('halaman', 'admin'));
}

public function update($id, Request $request){
    $halaman = 'users';
    $admin = User::findOrFail($id);
    $admin->update($request->all());
    return redirect('admin');
}

public function cetak_pdf(){
    $admin = User::all();
    $pdf = PDF::loadview('cetakadmin.index_pdf',['admin'=>$admin]);
    return $pdf->stream();
}

}