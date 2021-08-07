<?php

$ManageHeadBody = file_get_contents("gorunum/management_head_body.php");
$navbarCik = file_get_contents("gorunum/navbar_unlogin.php");
$navbarLogged = file_get_contents("gorunum/navbar_loggedin.php");
$manageView = file_get_contents("gorunum/management_view.php");

echo $ManageHeadBody;
echo $navbarLogged;
echo $manageView;

?>

<script async type="text/javascript" src="gorunum/js/bulma.js"></script>
</body>

<footer class="footer">
    <div class="content has-text-centered">
        <p>
            <strong>Coded</strong> by <a href="https://">z</a>.
        </p>
    </div>
</footer>