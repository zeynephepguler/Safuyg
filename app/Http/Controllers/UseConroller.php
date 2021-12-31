<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullani;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Validator, Input, Redirect;
class UseConroller extends Controller
{

  public function ogrencigiris()
  {
    return view('layouts.ogrencigiris');
    // code...
  }
    public function alma (Request $req)
    {
      $kullani = new Kullani();
      $kullani->ad=$req->ad;
      $kullani->no=$req->no;
      $kullani->soyad=$req->soyad;
      $kullani->email=$req->email;
      $kullani->sifre=Hash::make($req->sifre);
      $kullani->telefon=$req->telefon;
      $kullani->adres=$req->adres;
      $kullani->tc=$req->tc;

      $kullani->save();
      return redirect('ogrencigiris');
    }

    function kontrol(Request $request){
        //Validate requests
    $validator = Validator::make($request->all(), [
          'no'=>'required|no|unique:kullanis',
          'sifre'=>'required|sifre|min:5|max:12',

        ]);

        $userInfo = Kullani::where('no','=', $request->no)->first();

        if(!$userInfo){
            return back()->with('fail','Numaraya kayıtlı Öğrenci yok');
        }else{
            //check password
            if(Hash::check($request->sifre, $userInfo->sifre)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('ogrencianasayfa');

            }else{
                return back()->with('fail','Şifre Yanlış');
            }
        }
    }

    
}
