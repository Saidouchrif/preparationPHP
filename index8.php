<?php
/// cour 12 video 13
$num1=10;
$num2=5;
$operatur="+";
switch($operatur){
    case $operatur == "+":
        $result = $num1 + $num2;
        echo"<h1>Resultat"." ". $result."</h1>";
        break;
    case $operatur == "-":
        $result = $num1 - $num2;
        echo"<h1>Resultat"." ". $result."</h1>";
        break;
    case $operatur == "*":
        $result = $num1 * $num2;
        echo"<h1>Resultat"." ". $result."</h1>";
        break;
    case $operatur == "/":
        $result = $num1 / $num2;
        echo"<h1>Resultat"." ". $result."</h1>";
        break;
    default :
    echo"<h1>Operateur non valide</h1>";
}
?>