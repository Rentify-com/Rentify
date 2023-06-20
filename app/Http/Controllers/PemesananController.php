<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function hapus($id){

        $del = book::find($id);
        $del->delete();

        return redirect('/Pemesanan')->with('success', 'Penghapusan berhasil!');
    }
}
