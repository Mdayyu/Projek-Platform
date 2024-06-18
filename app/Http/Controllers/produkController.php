<?php

namespace App\Http\Controllers;

use App\Models\produkModel;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index (){
        $produk = produkModel::all();

        return view('home' , ['produk' => $produk]);
    }
}
