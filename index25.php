<?php
// cour 43 video 44 et cour 44 video 45 et cour 45 video 46
// strlen(nomvar) // kathsab lik chhal mn caractaire endk fi var
// str_word_count(nomvar) // kathsab lik chhal mn kalma endk fi var
// strrev(nomvar) // kat3kas lik l valeur dyal var
// substr(nomvar,lbadya,fin) // kat9ata3 mn var mn index li etitiha htal index li gadi tsali fih o kat afficherh lik
// strpos(nomvar,search) // kat9alab ela index li etitiha o katrad lik blasto fin kayn was var
// str_replace(search,replace,nomvar) // kat9alab ela lkalma li etitiha o katbadalha
// str_repeat(nomvar,nombre de repetision) // kateawad lik var ela hsab chhal etitiha
// ucwords(nomvar) // katrad lik awal harf fi lkalma kbir fi var kaml
// strtoupper(nomvar) // katrad lik l var kaml bi horof kbira
// strtolower(nomvar) // katrad lik l var kaml bi horof sghira
// trim(nomvar) // kathayad l espace mn l var
// ltrim(nomvar) // kathayad l espace mn lbadya dyal var
// rtrim(nomvar) // kathayad l espace mn lakhar dyal var
$var="said ouchrif";
echo strlen($var);
echo "<br/>";
echo str_word_count($var);
echo "<br/>";
echo strrev($var);
echo "<br/>";
echo substr($var,0,2);
echo "<br/>";
echo strpos($var,"o");
echo "<br/>";
echo str_replace("said","Hamza",$var);
echo "<br/>";
echo str_repeat($var,3);
echo "<br/>";
echo ucwords($var);
echo "<br/>";
echo strtoupper($var);
echo "<br/>";
echo strtolower($var);
echo "<br/>";
echo trim($var);
echo "<br/>";
echo ltrim($var);
echo "<br/>";
echo rtrim($var);
?>