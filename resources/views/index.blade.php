<!DOCTYPE html>
<div
 style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"
 unselectable="on"
 onselectstart="return false;"
 onmousedown="return false;">


<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Minta-Weboldal</title>
  </head>
  <body>
    <div class="menuholder">
      <div class="titles">
        <div class="button">
          <a href="/" class="button" style="text-decoration: none;">Főoldal</a>
        </div>
        <div class="button">
          <a href="/adatbazis" class="button" style="text-decoration: none;">Adatbázis</a>
        </div>
        <div class="button">
          <a href="/non-adatbazis" class="button" style="text-decoration: none;">Non-Adatbázis</a>
        </div>
      </div>
    </div>
    <div class="kisfelirat">
      <p>< header ></p>
    </div>
    <div class="php_container">
      <h1>Üdvözlöm a Minta-Weboldalamon!</h1>
      </div>
      <div class="kisfelirat">
        <p> < /header ></p>
     </div>
     <div class="kisfelirat">
       <p></p>
       <p></p>
       <p>< br ></p>
       <p></p>
       <p></p>
    </div>
    <div class="kisfelirat">
      <p>< body ></p>
   </div>
    <div class="body">
      <p>Mi is a lényege ennek a weboldalnak?<br>Ez egy bemutató, a tudásomat tükrözi.<br>
         Miért hatalmas segítség a PHP? Mutatok egy példát: <br> <br>
        <?php
        $array = array("Látja?","Például ilyen könnyű","felsorolásokat csinálni","PHP segítségével!");
        foreach ($array as $elem) {
          echo "<li>" . $elem . "<br>";
        }
         ?>
         <br>

      </p>
      <p>Tehát ez a felsorolás egy kis PHP script segítségével valósult meg. Ez HTML-el sokkal időigényesebb lenne, valamint ez csak négy darab adat.</p>
      <p>Laravel keretrendszerre épül az oldal, mert, ha PHP, akkor Laravel. <br> Ennek több előnye is van, például az MVC pattern, véleményem szerint
        ez az OOP PHP alapja.
      </p>
      <p>Az oldal tematikája szerint betekintést lehet nyerni több funkcióba is. Adatrendezés adatbáziskezeléssel, valamint nélküle.</p>
      <p>Ha pedig már az adatbáziskezelésnél tartunk, akkor SQL, MySQL, phpMyAdmin. Az adatok a host weboldal által nyújtott partíciómon találhatók.</p>
      <br>
      <p>Célom, hogy mind a Frontend, mind a Backend munkám megmutatkozzon a weboldal kinézetében, működésében.</p>

    </div>
    <div class="kisfelirat">
      <p>< /body ></p>
   </div>
   <br>
   <div class="kisfelirat">
     <p>< br ></p>
  </div>
   <br>
   <div class="kisfelirat">
     <p>< footer ></p>
  </div>
   <div class="footerresz">
     <p>© Jankó Olivér - minta-weboldal - 2022.</p>
   </div>
   <div class="kisfelirat">
     <p>< /footer ></p>
  </div>
  <br>
  </body>
  </div>
</html>
