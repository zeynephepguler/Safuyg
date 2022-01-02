@extends('layouts.master')
@section('content')
<body>
    <link rel="stylesheet" href="{{ asset('css/sec.css') }}" type="text/css">
<br>
<div>
<input type="button" class="bsvr renk" value="Çap Başvurusu">
<input type="button" class="bsvr renk" value="Yatay Geçiş Başvurusu">
<input type="button" class="bsvr renk" value="Dikey Geçiş Başvurusu">
<input type="button" class="bsvr renk" value="İntibak Başvurusu">
<input type="button" class="bsvr renk" value="Yaz Okulu Başvurusu">
</div>

@stop
