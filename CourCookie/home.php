<?php
// affichaha wakha fi ficher lakhor
if(isset($_COOKIE["name"])){
    $name = $_COOKIE["name"];
    echo '<h1>'.$name.'<h1/>';
}

?>