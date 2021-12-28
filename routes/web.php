<?php

use Illuminate\Support\Facades\Route;
use App\Resource\View;
use App\Http\Controllers\UseConroller;
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


Route::get('/', function()
{
  return view('layouts.anasayfa');
})->name('anasayfa');

Route::get('/ogrencigiris', function()
{
  return view('layouts.ogrencigiris');
})->name('ogrencianasayfa');

Route::get('/ogrencianasayfa', function()
{
  return view('layouts.ogrencianasayfa');
})->name('ogrencianasayfa');

Route::get('/basvurularım', function()
{
  return view('layouts.başvurularım');
})->name('basvurularım');

Route::get('/basvuruyap', function()
{
  return view('layouts.yenibasvurularim');
})->name('yenibasvurularım');

Route::get('/admingiriş', function()
{
  return view('layouts.admingiris');
})->name('admin');

Route::get('/admin', function()
{
  return view('layouts.admin');
})->name('admin');

Route::view('kayitol','layouts.kayitol');
Route::post('kayitol',[UseConroller::class,'alma']);
