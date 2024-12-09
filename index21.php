<?php
/// cour 33 video 34 et cour 34 video 35
/// filter_var(nomvar,FILTER_VALIDATE_EMAIL) katchof wach valeur li jat email ola la kan email katrad true 
// filter_input(INPUT_POST,"namevar",FILTER_SANITIZE_EMAIL) // katchof wach valeur li jat email ola la kan email katrad true 

?>
<form method="POST">
    Username : <input type="text" name="user" placeholder="Entre votre username"><br><br>
    Password : <input type="password" name="pass" placeholder="Entre votre password"><br/><br>
    <button name="submit">Se connecter</button>
</form>
<?php
if(isset($_POST['submit'])){
    $tcheck=filter_var($_POST["user"],FILTER_VALIDATE_EMAIL);
    $tcheck2=filter_input(INPUT_POST,"user",FILTER_SANITIZE_EMAIL);
    if(!empty($tcheck)){
        echo "Email valide";
        echo "<br/>";
    }else{
        echo "Email non valide";
        echo "<br/>";
    }
    if(!empty($tcheck2)){
        echo "user valide";
        echo "<br/>";
    }else{
        echo "user non valide";
        echo "<br/>";
    }
}
?>