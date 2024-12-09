<?php
/// cour 26 video 27 et cour 27 video 28 et cour 28 video 29
/// function
function App(){
    echo "<h1>Said ouchrif</h1>";
}
App();
function info($name,$age){
    echo $age.$name;
}
info("said",19);
function calcule($num1,$num2){
    $res=$num1*$num2;
    return $res;
}
echo "<br/>";
echo calcule(10,2);
?>