<?php
if(isset($_POST["send"])){
    echo "<h1>Welcome"." ".$_POST['name']."<h1/>";
}
?>
<table border="1">
    <thead>
        <tr>
        <th>Name</th>
        <th>E-mail</th>            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_POST["name"] ?></td>
            <td><?php echo $_POST["email"] ?></td>
        </tr>
    </tbody>
</table>