<?php
//// cour 7 video 8 
/// strlen(nomvar) kihsab chhal mn caracter endk fi var 
/// str_word_count(nomvar) kihsab chhal mn kalma endk fi var
/// strrev(nomvar) kay9lab lhorof dyal var
/// strpos(nomvar,"lharf ola lkalma") kiwarik lkalma ola lharf fen kayn mn lvar // ila ma kantch ki rad lik false
/// str_replace("li gada tbadal","kalma jdida",nomvar) kaybadal lharf ola lkalma li kat3tih mn lvar 
// trim(nomvar) kayhayad espace mn lvar
$name="Said";
echo strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"Said");
echo "<br>";
echo str_replace("Said","sir fhalak",$name);
echo "<br>";
echo trim($name);
?>