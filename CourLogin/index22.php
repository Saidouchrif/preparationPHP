<form method="POST">
    Username : <input type="text" name="user" placeholder="Entre votre username...." ><br>
    Password : <input type="password" name="pass" placeholder="Entre votre password...."><br>
    <button name="send">Se connecter</button>
</form>
<?php
if(isset($_POST['send'])){
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $user2="Said23";
    $pass2="1234";
    if($pass===$pass2&&$user===$user2){
        echo "Vous êtes connecté";
        $_SESSION["user"]=$user2;
        header('refresh:1,url="Home.php"');
    }else{
        echo "Mauvais username ou password";
    }
}

?>