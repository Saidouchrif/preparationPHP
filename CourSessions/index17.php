<?php
/// cour 29 video 30
/// sessions
//// session_start() katbda session
/// session_unset() katmsah ga3 les variables mn no3 session
// session_destroy() kathbas session
session_start();
$_SESSION['name']="ahmed";
session_unset();
?>
<h2><?php
/// empty() ila ma kanch
if(!empty($_SESSION['name'])){
    echo $_SESSION['name'];
}{
    echo "no name";
}
?></h2>