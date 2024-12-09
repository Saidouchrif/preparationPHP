<?php
/// cour 23 video 24 et cour 24 video 25
/// array associative
$person = ["name"=>"said","lastname"=>"ouchrif","age"=>"19"];
echo "<h1>".$person["name"]."<h1/>" ;
/// key=>value
foreach($person as $value=>$res){
    echo "<h1>".$value.":".$res."<h1/>";
}
echo "<h1>".$person["name"]."<h1/>" ;
/// multtiple array
$arr=[["Said","Hamza","anwar"],[19,21,322,3223],["casablanca","rabat","fes"]];
/// print_r(nomvar) kat afficher lik mokawinat array kamla
print_r($arr);
echo "<h1>".$arr[0][1]."</h1>";
foreach($arr as $value){
    /// afficha liya tani index fi kola array
    echo "<h1>".$value[1]."</h1>";
}
$user=[["name"=>"Said","email"=>"saidouchrif16@gmail.com","age"=>19],
["name"=>"Hamza","email"=>"Hamzaouchrif16@gmail.com","age"=>15],
["name"=>"Anwar","email"=>"anwarouchrif16@gmail.com","age"=>10]
];
/// afficher les informations de l'utilisateur
foreach($user as $data){
    echo '<h1>Name :'.$data["name"].'</h1>';
    echo '<h1>E-mail :'.$data["email"].'</h1>';
    echo '<h1>Age :'.$data["age"].'</h1>';
}
?>