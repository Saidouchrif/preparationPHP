<form method="POST">
    Username : <input type="text" name="user" placeholder="Entre votre username"><br><br>
    Password : <input type="password" name="pass" placeholder="Entre votre password"><br/><br>
    <button name="submit">Se connecter</button>
</form>


<?php
// cour 31 video 32
// iseet()
if(isset($_POST['submit'])){
    echo "<h1>".$_POST["user"]."<h1/>";
    echo "<h1>".$_POST["pass"]."<h1/>";
}
?>