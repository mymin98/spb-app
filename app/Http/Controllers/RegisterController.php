<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenggunaDalaman;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function register(Request $request){
        $request->validate([
            'pengguna_nama' => 'required|string|max:255',
            'pengguna_noKP' => 'required|string|max:12',
            'pengguna_gelaranJawatan' => 'required|string|max:255',
            'pengguna_bahagianID' => 'required|string|max:255',
            'pengguna_namaBahagian' => 'required|string|max:255',
            'pengguna_katalaluan' => 'required|string|min:8',
            'pengguna_IDPerananRef' => 'required|string|max:255',
            'pengguna_staffID' => 'required|string|max:255',
        ]);

        PenggunaDalaman::create([
            'pengguna_nama' => $request->input('pengguna_nama'),
            'pengguna_noKP' => $request->input('pengguna_noKP'),
            'pengguna_gelaranJawatan' => $request->input('pengguna_gelaranJawatan'),
            'pengguna_bahagianID' => $request->input('pengguna_bahagianID'),
            'pengguna_namaBahagian' => $request->input('pengguna_namaBahagian'),
            'pengguna_katalaluan' => bcrypt($request->input('pengguna_katalaluan')),
            'pengguna_IDPerananRef' => $request->input('pengguna_IDPerananRef'),
            'pengguna_staffID' => $request->input('pengguna_staffID'),
        ]);

        return redirect()-> route('register.success');
    }

    public function registerSuccess(){
        return view('register.success');
    }
}

