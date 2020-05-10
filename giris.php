<?php

session_start();
ob_start();


if(($_POST["email"]=="b181210085@sakarya.edu.tr") && ($_POST["password"]=="123"))
{

$_SESSION["login"] = "true";
$_SESSION["email"] = "B181210085@sakarya.edu.tr";
$_SESSION["password"] = "123";

echo "Hosgeldiniz B181210085. Başarıyla giriş yaptınız. Hakkında sayfasına yonlendiriliyorsunuz. Lütfen bekleyin..";
												
header("Refresh:2; url=index.html");

}
elseif(($_POST["email"]=="") && ($_POST["password"]==""))
{
    echo "Kullanici adi veya sifre bos birakilmamalidir";
    header("Refresh: 2; url=giris.html");
}

else
{
	echo "Kullanici adi veya sifreniz yanlis.";
	header("Refresh: 2; url=giris.html");
}


ob_end_flush();
?>