<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class CarianController extends Controller
{
    public function index(){
        return view('carian.index',[ "buku" => Buku::all()]);
    }
}
