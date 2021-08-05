<?php

$MetaHeadBody = file_get_contents("gorunum/meta_head_body.php");
echo $MetaHeadBody;

if (!isset($_COOKIE["kadi"]) && !isset($_COOKIE["sifre"]))  :

  $navbarCik = file_get_contents("gorunum/navbar_unlogin.php");
  $regKarsila = file_get_contents("gorunum/register_schema.php");

ob_start();

  echo $navbarCik;
  echo $regKarsila;

  if (isset($_POST["Tamamla"])) :
    $rkadi = htmlspecialchars($_POST["rkadi"]);
    $rsifre = htmlspecialchars($_POST["rsifre"]);

//    echo "A fuckin problem occured." . "<br>";
//    echo "Repeat the registration process." . "<br>" . "<br>";
//    echo "If the problem persists, contact the system administrator. ( if you can reach ;) )" . "<br>";
//    echo "You are redirected to the registration page";
//    header("refresh: 2.5; url=register.php");

    if ($rkadi=="" && $rsifre=="") :

    echo "Username / Password can't be null!" . "<br>";
    echo "Or is this an attack?";

    elseif ($rkadi!="" && $rsifre!="") :

    require_once "maconfig.php";

    $uyeVarmi = $veriTabBag->query("SELECT kullanici FROM kullaniciList where kullanici = '$rkadi'");

    $ccikti = $uyeVarmi->fetch_assoc();

    $cccikti = implode($ccikti);

      if ($cccikti == $rkadi) :

        echo " err0r." . "<br>";
        echo "An account with <bold>" . $rkadi . "</bold> username has already been created." . "<br>";
        echo "Choose another username.";

      else :

        $kayitDB = $veriTabBag->query("INSERT INTO kullaniciList (kullanici, sifre) VALUES ('$rkadi', '$rsifre')");

        echo "Registration has been completed.";
        echo "<br>";
        echo "Username: " . $rkadi;

        setcookie("kadi", $rkadi, time() + (60*60*24));
        setcookie("sifre", $rsifre, time() + (60*60*24));

        echo "<br> <br> ";

        echo "You are being redirected to the homepage...";

        header("refresh: 2.5; url=index.php");

endif;
endif;
endif;
endif;
?>
