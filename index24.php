<?php
// cour 41 video 42 et cour 42 video 43
// $_SERVER["PHP_SELF"] // kaytala3 lik src dyal ficher 
// $_SERVER["SCRIPT_FILENAME"] // kaytala3 lik src dyal ficher mn C
// $_SERVER["REQUEST_METHOD"] // kayrad lik ina method khdam biha GET ola POST default GET
// $_SERVER["QEURY_SCRIPT"] // kay3tik data li kayna fi lien
// $_SERVER["SERVER_ADDR"] // kayrad lik nom dyal server li hat fih site dyalk
// $_SERVER["SERVER_NAME"] // kayrad lik titre dyal domaine li hat fih site dyalk
// $_SERVER["REMOTE_ADDR"] // kaytala3 lik address api dyal site dyalk
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["SCRIPT_FILENAME"];
echo "<br>";
echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
echo $_SERVER["QUERY_STRING"];
echo "<br>";
echo $_SERVER["SERVER_ADDR"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["REMOTE_ADDR"];
?>