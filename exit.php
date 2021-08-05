<?php

@$cikis=$_POST["cikis"];

if ($cikis) :

	@setcookie("kadi", $ad, time() - 10);
	@setcookie("sifre", $sifre, time() - 10);

echo "Log-off has been completed.<br>Wait...";

header("refresh: 3; url=index.php"); 

else:

echo "Problem Occurred.";

endif;


?> 
