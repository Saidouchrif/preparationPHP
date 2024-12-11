<?php
// cour 47 video 48
// explode(" ",nomvar) // kayrad lik var ela chkal array o kat afficherha mn foreach()
// implode()// kayghlab array l string
// strcmp(nomvar1,nomvar2) // kat9aran bin joj dyal les vars
$text='Said ouchrif';
$arr=explode(" ",$text);
foreach($arr as $data){
    echo $data.'<br>';
}
$arr2=implode($arr);
echo $arr2;
echo "<br/>";
$var1="said";
$var2="hamza";
if(strcmp($var1,$var2)===true){
    echo "var1 le meme var2";
}else{
    echo "var1 pas le meme var2";
}
?>