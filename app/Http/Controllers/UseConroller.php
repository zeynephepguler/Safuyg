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
      $kullani->save();
      return redirect('ogrencigiris');
    }
}
