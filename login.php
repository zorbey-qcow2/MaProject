<?php

$MetaHeadBody = file_get_contents("gorunum/meta_head_body.php");
$navbarCik = file_get_contents("gorunum/navbar_unlogin.php");
$navbarLogged = file_get_contents("gorunum/navbar_loggedin.php");
$unlogKarsila = file_get_contents("gorunum/login_loginorregister.php");
$loggedKarsila = file_get_contents("gorunum/login_loggedAlready.php");
ob_start();
echo $MetaHeadBody;

if (isset($_COOKIE["kadi"]) && isset($_COOKIE["sifre"])) :
    echo $navbarLogged;
    echo $loggedKarsila;

elseif (!isset($_COOKIE["kadi"]) && !isset($_COOKIE["sifre"]))  :
    echo $navbarCik;
    echo $unlogKarsila ;

        if (isset($_POST["girisyap"])) :
            $kad=htmlspecialchars($_POST["kadi"]);
            $sifre=htmlspecialchars($_POST["sifre"]);

            if ($kad=="" || $sifre=="") :
                echo "Username or password or maybe both is null!?" . "<br>";
                echo "Try again.";

            elseif ($kad!=="" && $sifre!=="") :
                require_once "maconfig.php";
                $sorgu = $veriTabBag->query("SELECT kullanici, sifre FROM kullaniciList where kullanici = '$kad'");
                $cikti = $sorgu->fetch_assoc();
                $db_ad = $cikti["kullanici"];
                $db_sf = $cikti["sifre"];

                if ($kad==$db_ad && $sifre==$db_sf) :

  	               setcookie("kadi", $kad, time() + (60*60*24));
  	               setcookie("sifre", $sifre, time() + (60*60*24));

  	                echo "Login completed successfully.";
                    echo '<form action="exit.php" method="post">
                    <input type="submit" name="cikis" value="Log-off">
                    </form>';

                    echo "<br>";
                    echo "Back to the homepage : <a href='index.php'>Yeah, go back!</a><br>";

  	           else:

  	                echo "There is an error in the entered information. <a href='index.php'></a><br>";
               endif;
            endif;
        endif;
endif;

if (isset($_POST["kayitol"])) :
 header("refresh: 0; url=register.php");
endif;

?>
</div>
</div>

</body>

<footer class="footer">
<div class="content has-text-centered">
  <p>
    <strong>Coded</strong> by <a href="https://">z</a>.
  </p>
</div>
</footer>
