<?php
/// cour 54 video 55 et cour 55 video 56
/// file_exists("src"."nomfile") // kay t akad wach dak fichier kin bsah fdak src li etitih
// ila kanat ki rad true
// src: khawi kateni l ficher li fih nta db
/// unlink('src'.'nomfile') // katmsahlik file li katetiha
?>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" value="entre votre photo" required>
    <button name="submit" type="submit">Send</button>
</form>
<?php
if(isset($_POST['submit'])){
    if((file_exists("img/".$_FILES['file']["name"]))===false){
        move_uploaded_file($_FILES['file']["tmp_name"],'img/'.$_FILES['file']["name"]);
        echo '<h1>ficher passe</h1>';
    }else{
        echo '<h1>ficher deja kayn</h1>';

        unlink(''.'dfd.jpg');
    }
}
?>
