<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // protected $fillable = [
    //     'user','name','img','kategori','harga','jadwal','telp'
    // ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
