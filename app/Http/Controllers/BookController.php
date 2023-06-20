<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function pesan(Request $request){
        $masuk = $request->validate([
            'name' => 'required',
            'user' => 'required',
            'img' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'jadwal' => 'required',
            'telp' => 'required'
        ]);

        book::create([
            'name' => $masuk['name'],
            'user' => $masuk['user'],
            'img' => $masuk['img'],
            'kategori' => $masuk['kategori'],
            'harga' => $masuk['harga'],
            'jadwal' => $masuk['jadwal'],
            'telp' => $masuk['telp'],
        ]);

        return redirect('/pilih');
    }
}
