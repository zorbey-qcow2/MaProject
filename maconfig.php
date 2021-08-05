<?php
$servername = "localhost";
$username = "maform";
$password = "maform";
$db = "maform";

// Create connection
$veriTabBag= new mysqli($servername, $username, $password, $db);
$veriTabBag->set_charset('utf8mb4');

// Check connection
if ($veriTabBag->connect_error) :
  die("DB Bağlantısı sağlanamadı!!!: " . $veriTabBag->connect_error);
  
//else :
//echo "Herşey tamam koççum";

endif;

// $sorgu = $veriTabBag->query("SELECT kullanici, sifre FROM kullaniciList where kullanici = '$kad'");


// if ($veriTabBag->errno > 0) {
//     die("<b>Sorgu Hatası:</b> " . $veriTabBag->error);
// }

//print_r($sorgu);
//$cikti = $sorgu->fetch_array();

// $cikti = $sorgu->fetch_assoc();

// echo "<pre>";
// print_r($cikti);
// echo "</pre>";


// echo "Kullanıcı adı: " . $cikti["kullanici"] . "<br /> Şifre: " . $cikti["sifre"];



//$sorgu->close();
//$veriTabBag->close();

?> 
