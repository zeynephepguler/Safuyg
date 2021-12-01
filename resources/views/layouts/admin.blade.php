@extends('layouts.header')
@section('content')
  @section('title','admingiriş')
<style>
    h1{
        color: blue;
      }
      textarea{
        color: red;
        background-color: white;
        border-radius: 12px;
        padding: 5px;
        border: 1px solid black;
        font-size: 15px;
        font-family: fantasy;


      }
      button{
        color: black;
        border-radius: 15px;

      }
    </style>

  <body>
    <h1>Admin Sayfasına Hoşgeldiniz...</h1>

  <label for="Admin id">Admin id:



            <div >
              <textarea id="Admin id" name="Admin İd"rows="2" cols="40" autofocus,form="25" >
                  İd giriniz
                   </textarea>
            </div>

            </label>

    <label for="Admin sifre">Admin sifre:

  <div><textarea id="Admin sifre" name="Adminsifre"rows="2" cols="40">
            şifre giriniz
  </textarea>

</div>
  </label>
  <button type="button" name="giriş yap"

  onclick="location='Adminanasayfa'"

    >
Giriş Yap
  </button>
    </body>

@stop
