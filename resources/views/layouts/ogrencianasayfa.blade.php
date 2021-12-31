
@extends('layouts.master')
@section('content')

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Bilgilerim</title>
      <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
  </head>
  <body>

      <div class="container">
           <div class="row">
              <div class="col-md-6 col-md-offset-3">
                     <h4>Dashboard</h4><hr>
                     <table class="table table-hover">
                        <thead>
                          <th>Name</th>
                          <th>Numarası</th>
                          <th></th>
                        </thead>
                        <tbody>
                           <tr>
                              <td>{{ $LoggedUserInfo['ad'] }}</td>
                              <td>{{ $LoggedUserInfo['soyad'] }}</td>
                              <td>{{ $LoggedUserInfo['no'] }}</td>
                              <td>{{ $LoggedUserInfo['telefon'] }}</td>
                              <td>{{ $LoggedUserInfo['adres'] }}</td>
                              <td>{{ $LoggedUserInfo['tc'] }}</td>
                              <td><a href="{{ route('cıkıs') }}">Logout</a></td>
                           </tr>
                        </tbody>
                     </table>


              </div>
           </div>
      </div>
  </body>
  </html>
@stop
