<?php

namespace App\Http\Controllers;

use App\Models\bantuan;
use Illuminate\Http\Request;

class bantuanController extends Controller
{
    public function store(Request $request){
        $request = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'subject' => 'required',
            'msg' => 'required'
        ]);
        

        bantuan::create($request);

        return redirect('/bantuan')->with('success','Pesan anda telah terkirim!');
    }
}
