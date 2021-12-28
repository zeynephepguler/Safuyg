@include('layouts.footer')

@include('layouts.header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/ilk.css') }}" type="text/css">
    <title></title>
  </head>
  <body>

    <div class="div1" >
    <ul ><left>
      <li><a href="/kayitol">Kayıt Ol</a></li>
      <li><a href="/ogrencigiris">Giriş Yap</a></li>
      <li><a href="/">Şifremi Unuttum</a></li>
    </ul>
  </div>
      <form method="post" action="kayitol">
        @csrf
      <div class="but"> <center>
        <input name="no" type="number" pattern="\d" size="50px" placeholder="Öğrenci No"> <br>
        <input name="ad" type="text" size="50px" placeholder="Ad"><br>
        <input type="text" size="50px" placeholder="Soyad"><br>
        <input type="password" size="50px" placeholder="Şifre"><br>
        <input type="password" size="50px" placeholder="Şifre Tekrarı"><br>
        <input type="email" size="50px" placeholder="E-posta"><br>
        <input type="tel" size="50px" placeholder="Telefon"><br>
        <input type="text" pattern=“\d{11} size="50px" placeholder="TC Kimlik"><br>
        <input type="date" size="50px" placeholder="Doğum Tarihi"><br>
        <input type="text" size="50px" placeholder="Adres"><br>
        <select>
        <option> Sınıf Seçiniz </option>
        <option> Hazırlık </option>
        <option> 1.Sınıf </option>
        <option> 2.Sınıf </option>
        <option> 3.Sınıf </option>
        <option> 4.Sınıf </option>
      </select> <br>
      <select>
      <option>Üniversite Seçiniz </option>
      <option> Kocaeli Üniversitesi </option>
    </select> <br>
    <select>
    <option> Fakülte Seçiniz </option>
    <option> </option>
    <option> </option>
    <option> </option>
    <option>  </option>
    <option> </option>
  </select> <br>
  <select>
  <option> Bölüm Seçiniz </option>
  <option>  </option>
  <option>  </option>
  <option>  </option>
  <option>  </option>
  <option> </option>
</select> <br><br>


    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" name="button" class="button" onclick="location='#'">  Kayıt Ol</button>
  </body>
  </div>
</form>
</html>
