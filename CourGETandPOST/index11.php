<?php
/// cour 18 video 19
// get
// post
?>
<form method="GET">
    Name :<input type="text" name="name" placeholder="name" name="n1"><br>
    E-mail:<input type="email" name="email" placeholder="email" name="n2"><br>
    <button name="send" type="submit">Valid</button>
</form>
<?php
/// GET
if(isset($_GET["send"])){
    echo "<b>Name:</b>".$_GET["name"]."<br>";
    echo "<b>Email:</b>".$_GET["email"]."<br>";
}
?>
<form method="POST" action="Table.php">
    Name :<input type="text" name="name" placeholder="name" name="n1"><br>
    E-mail:<input type="email" name="email" placeholder="email" name="n2"><br>
    <button name="send" type="submit">Valid</button>
</form>
<?php
/// GET
/// isset(ila kan)

?>