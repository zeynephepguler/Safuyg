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
    <script type="module">
      // Import the functions you need from the SDKs you need
      import { initializeApp } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js";
      import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.5.0/firebase-analytics.js";
      // TODO: Add SDKs for Firebase products that you want to use
      // https://firebase.google.com/docs/web/setup#available-libraries

      // Your web app's Firebase configuration
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
      const firebaseConfig = {
        apiKey: "AIzaSyCwAYQs1Y2YbItseGeaCdRTMN00Db72J9M",
        authDomain: "kobs-db116.firebaseapp.com",
        databaseURL: "https://kobs-db116-default-rtdb.firebaseio.com",
        projectId: "kobs-db116",
        storageBucket: "kobs-db116.appspot.com",
        messagingSenderId: "1099035871891",
        appId: "1:1099035871891:web:3938d72b37b87ce6b7db66",
        measurementId: "G-5T4MKWE651"
      };

      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
      const analytics = getAnalytics(app);
      firebase.initializeApp(config);
   async function signin() {
       console.log('signing in')
       let creds = await firebase.auth().signInWithEmailAndPassword('craig.michael.morris@gmail.com', 'testing')
       console.log({ creds })
       let token = await creds.user.getIdToken()
       console.log({ token })
       let headers = { Authorization: 'Bearer ' + token }
       let me = await axios.get('/api/me', { headers })
       console.log({ me })
   }
      </script>


    <div class="div1" >
    <ul ><left>
      <li><a href="/kayitol">Kayıt Ol</a></li>
      <li><a href="/ogrencigiris">Giriş Yap</a></li>
      <li><a href="/">Şifremi Unuttum</a></li>
    </ul>
  </div>

      <div class="but"> <center>
        <input type="number" pattern="\d" size="50px" placeholder="Öğrenci No"> <br>
        <input type="text" size="50px" placeholder="Ad"><br>
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



    <button type="button" name="button" class="button" onclick="location='#'">  Kayıt Ol</button>
  </body>
  </div>

</html>
