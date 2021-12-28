<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullani;

class UseConroller extends Controller
{
    public function alma (Request $req)
    {
      $kullani = new Kullani;
      $kullani->ad=$req->ad;
      $kullani->no=$req->no;
      $kullani->soyad=$req->soyad;
      $kullani->email=$req->email;
      $kullani->sifre=$req->sifre;
      $kullani->telefon=$req->telefon;
      $kullani->adres=$req->adres;
      $kullani->tc=$req->tc;

      $kullani->save();
      return redirect('ogrencigiris');
    }
}
