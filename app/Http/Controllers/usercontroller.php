<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use PDF;

class usercontroller extends Controller
{
    public function user(){
        $halaman = 'user';
        $user_list = Users::orderBy('id', 'asc')->paginate(5);
        $jumlah_user = Users::count();
    return view('user.index', compact('halaman', 'user_list', 'jumlah_user'));
}

public function edit($id){
    $halaman = 'user';
    $user = Users::findOrFail($id);
    return view('edituser.index', compact('halaman', 'user'));
}

public function update($id, Request $request){
    $halaman = 'user';
    $user = Users::findOrFail($id);
    $user->update($request->all());
    return redirect('user');

}

public function cetak_pdf(){
    $user = Users::all();
    $pdf = PDF::loadview('cetakuser.index_pdf',['user'=>$user]);
    return $pdf->stream();
}

}
