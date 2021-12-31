@extends('layouts.anasayfadüzen')
@section('content')
<body>
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">


<form action="{{ route('kayitkontrol') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif

           @csrf
              <div class="form-group">
                 <label>Numara</label>
                 <br>
                 <input type="text" class="form-control" name="no" placeholder="Numaranızı Giriniz" value="{{ old('no') }}">
                 <span class="text-danger">@error('no'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Şifre</label>
                 <br>
                 <input type="password" class="form-control" name="sifre" placeholder="Şifrenizi Giriniz">
                 <span class="text-danger">@error('sifre'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Sign In</button>
              <br>
              <a href="{{ route('kayitol') }}">Önce Kayıt Olmayı Deneyin</a>
           </form>
      </div>
   </div>
</div>
@stop
