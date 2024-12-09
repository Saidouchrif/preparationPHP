<?php
// cour 30 video 31
// strip_tags() katmsah ola kat3zal les tags HTML ela content li kin wasthom
// filter_var($nomvar,FILTER_SANITIZE_STRING) katmsah ola kat3zal les tags HTML ela content li kin wasthom
$text="<h1>Saidouchrif@gmail.com</h1>";
echo filter_var($text,FILTER_SANITIZE_STRING);
?>