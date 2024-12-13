<?php
// cour 67 video 68 et cour 68 video 69
// json_decode() // Json-PHP katetik json php 
// JSON OBJECT
// json_encode() // ila bgiti thawal array l json
// json_last_error() // KAYGOLIK ACHMAN ERROR ENDK // katrad lik number dyal error
$data='{"name":"said","age" : "19","city" : "casa"}';
$data= json_decode($data);
// kifach t afficher les données dyal json object
echo $data->name;
echo $data->age;
echo $data->city;
echo "<br>";
/// ila bgiti thawal json object l array
$data2='{"name":"said","age" : "19","city" : "casa"}';
$dataarray=json_decode($data2,true);
var_dump($dataarray);

echo "<br/>";
echo $dataarray['name'];
echo '<br>';
///ila bgiti thawal array l json
$data4=["name"=>"said","age"=>"19","lastname"=>"ouchrif"];
$data3=json_encode($data4);
var_dump($data3)
?>