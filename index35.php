<?php
/// cour 60 video 61
/// openssl_encrypt("nomvar","method cryptage","motpasse de cryptage",0,"numbrede caracter de cryptage");
/// openssl_decrypt("donner crypte","method cryptage","motpasse de cryptage",0,"numbrede caracter de cryptage")

$data="saidouchrif";
$crypt=openssl_encrypt($data,"AES-128-CBC","123",0,1234567891234567);
echo $crypt;
echo "<br/>";
$decrypte=openssl_decrypt($crypt,"AES-128-CBC","123",0,1234567891234567);
echo $decrypte;
?>