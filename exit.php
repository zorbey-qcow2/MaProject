<?php

@$cikis=$_POST["cikis"];

if ($cikis) :

	@setcookie("kadi", $ad, time() - 10);
	@setcookie("sifre", $sifre, time() - 10);

echo "Çıkış yapıldı<br>BEKLEYİNİZ";

header("refresh: 3; url=index.php"); 

else:

echo "SORUN OLUŞTU";

endif;


?> 
