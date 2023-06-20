<?php

use App\Models\book;
use App\Models\tempat;
use App\Models\bantuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\bantuanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware('guest');

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


Route::get('/daftar', function () {
    return view('daftar');
})->middleware('guest');

Route::post('/daftar', [RegisterController::class,'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});
Route::get('/showBantuan', function () {
    return view('showBantuan',['bantuan' => bantuan::all()]);
});

Route::post('/bantuan', [bantuanController::class,'store']);

Route::get('/Konser', function () {
    return view('Konser',['tempat' => tempat::all()]);
})->middleware('auth');

Route::get('/Ballroom', function () {
    return view('Ballroom',['tempat' => tempat::all()]);
})->middleware('auth');
Route::get('/Musik', function () {
    return view('Musik',['tempat' => tempat::all()]);
})->middleware('auth');
Route::get('/Futsal', function () {
    return view('Futsal',['tempat' => tempat::all()]);
})->middleware('auth');
Route::get('/Badminton', function () {
    return view('Badminton',['tempat' => tempat::all()]);
})->middleware('auth');
Route::get('/Basket', function () {
    return view('Basket',['tempat' => tempat::all()]);
})->middleware('auth');
Route::get('/Golf', function () {
    return view('Golf',['tempat' => tempat::all()]);
})->middleware('auth');
Route::get('/Tenis', function () {
    return view('Tenis',['tempat' => tempat::all()]);
})->middleware('auth');

Route::get('/PerTempat/{id}', function ($id) {
    $randomRows = DB::table('tempats')
    ->inRandomOrder()
    ->limit(4)
    ->where('kategori_id',tempat::find($id)->kategori_id)
    ->get();
    return view('PerTempat',['tempat' => DB::table('tempats')->where('id', $id)->first(),'rand' => $randomRows ]);
});

Route::post('/PerTempat', [BookController::class, 'pesan']);

Route::get('/pilih', function () {
    return view('pilih');
})->middleware('auth');
Route::get('/BCA', function () {
    return view('BCA');
})->middleware('auth');
Route::get('/BRI', function () {
    return view('BRI');
})->middleware('auth');
Route::get('/BNI', function () {
    return view('BNI');
})->middleware('auth');
Route::get('/Mandiri', function () {
    return view('Mandiri');
})->middleware('auth');
Route::get('/Luar', function () {
    return view('Luar');
})->middleware('auth');

Route::get('/Pemesanan', function () {
    return view('Pemesanan',['book' => book::all()]);
})->middleware('auth');

Route::get('/Pemesanan/{id}', [PemesananController::class,'hapus'])->middleware('auth');

Route::get('/Konfirmasi', function () {
    return view('Konfirmasi');
})->middleware('auth');

Route::get('/Form', function () {
    return view('Form');
});

Route::get('/FormEdit/{id}', function($id){
    return view('/FormEdit',['tempat'=>DB::table('tempats')->where('id', $id)->first()]);
});
Route::get('/Edit/{id}', function($id){
    return view('/Edit',['tempat'=>DB::table('tempats')->where('id', $id)->first()]);
});

Route::get('/Konser/{id}', [TempatController::class, 'hapus']);

Route::post('/Konser', [TempatController::class, 'tambahTempat']);

Route::post('/PerTempat/{id}', [TempatController::class,'editTempat']);
