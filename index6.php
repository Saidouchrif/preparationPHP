<?php
 /// cour 10 video 11
$age="20";
$string=is_string($age);
echo $age;
echo "<br/>";
if($age<19){
    echo "tu es mineur";
}else if($age<=5){
    echo "tu es enfant";
}else if($age=0){
    echo "entre un nombre supérieur de  0 ";
}else if ($age>=19){
    echo "tu es majeur";
}else if ($string===true||$string===1){
    echo "donner votre age";
}else{
    echo "errour";
}
?>