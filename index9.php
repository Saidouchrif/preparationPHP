<?php
/// cour 14 video 15 et cour 15 et video16 et cour 16 video 17
$list=array("said","hamza","anwar");
for($i=0;$i<3;$i++){
    echo"<h1>Welcome"." ". $list[$i]."</h1>";
}
$count=0;
while($count<3){
    echo"<h1>les Clients"." ". $list[$count]."</h1>";
$count++;
}
$num=1;
while($num<10){
    $res=$num*9;
    echo"<h1>9"."x". $num."=".$res."</h1>";
$num++;
}
$count1=0;
do{
    $res1=2*$count1;
echo "<h1>"."2"."X"."$count1"."="."$res1"."</h1>";
$count1++;
}while($count1<=10)
?>