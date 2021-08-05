
<?php

$MetaHeadBody = file_get_contents("gorunum/meta_head_body.php");
$navbarCik = file_get_contents("gorunum/navbar_unlogin.php");
$cards = file_get_contents("gorunum/index_cards.php");
$navbarLogged = file_get_contents("gorunum/navbar_loggedin.php");

echo $MetaHeadBody;


if (isset($_COOKIE["kadi"]) && isset($_COOKIE["sifre"])) :
    echo $navbarLogged;

elseif (!isset($_COOKIE["kadi"]) && !isset($_COOKIE["sifre"]))  :
    echo $navbarCik;

endif;


echo $cards;


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
