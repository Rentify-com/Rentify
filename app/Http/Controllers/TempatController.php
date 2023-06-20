<?php

namespace App\Http\Controllers;

use App\Models\tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    public function hapus($id){

        $del = tempat::find($id);
        $temp = $del->name;
        $del->delete();

        return redirect('/Konser')->with('success', ('Penghapusan '. $temp . ' berhasil!'));
    }

    public function cobaEdit($id){
        $tempat = tempat::find($id)->first()->get();

        return view('/perTempat',['tempat'=>$tempat]);
    }

    public function tambahTempat(Request $request){
        $validatedData = $request->validate([
            'kategori_id' => 'required',
            'name' => 'required',
            'desc'=>'required',
            'alamat' => 'required',
            'harga' => 'required',
            'rating' => 'required',
            'img' => 'required|image|file',
            'gmaps' => 'required',
            'telp' => 'required'
        ]);
        $validatedData['img'] = $request->file('img')->store('post-images');

        tempat::create([
            'kategori_id' => $request->kategori_id,
            'name' => $request->name,
            'desc'=>$request->desc,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'rating' => $request->rating,
            'img' => $validatedData['img'],
            'gmaps' => $request->gmaps,
            'telp' => $request->telp
        ]);

        return redirect('/Konser')->with('Success', 'Sukses menambah tempat!');
    }

    public function editTempat(Request $request,$id){
        $tempat = tempat::find($id);
        tempat::where('id', $tempat->id)
            ->update([
                'kategori_id' => $request->kategori_id,
                'name' => $request->name,
                'desc'=>$request->desc,
                'alamat' => $request->alamat,
                'harga' => $request->harga,
                'rating' => $request->rating,
                'gmaps' => $request->gmaps,
                'telp' => $request->telp
            ]);
        
        if ($request->img != null){
            $validatedData['img'] = $request->file('img')->store('post-images');
            tempat::where('id', $tempat->id)
            ->update([
                'img' => $validatedData['img']
            ]);
        }
        
        return redirect('/dashboard')->with('Success', 'Sukses mengedit tempat!');
    }
}
