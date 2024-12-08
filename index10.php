<?php
/// cour 17 video 18
// break
// continue
$arr=array("said","hamza","anwar");
for($i=0;$i<3;$i++){
    if($arr[$i]=="hamza"){
        continue ;
    }else{
        echo "<h1>$arr[$i]<h1/>";
    }
    
}
$arr1=array("said","hamza","anwar");
for($i=0;$i<3;$i++){
    if($arr1[$i]=="hamza"){
        break ;
    }else{
        echo "<h1>$arr1[$i]<h1/>";
    }
    
}
?>