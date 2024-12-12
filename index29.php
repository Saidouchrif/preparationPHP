<?php
// cour 50 video 51
// enctype="multipart/form-data" darori dar fi form bach itlah file l server

?>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" value="entre votre photo" required>
    <button name="submit" type="submit">Send</button>
</form>
<?php
if(isset($_POST["submit"])){
    $name=$_FILES['file']['name'];
    /// $_FILES['file']['tmp_name']; kadir save mo a9at fi src dyal xampp l ficher li etitih liha fi input
    $name2=$_FILES['file']['tmp_name'];
    // move_uploaded_file($name2,$name); katchad file li etitiha o kathato lik fi dossier li endk nta o li khdam fih acteul
    move_uploaded_file($name2,$name);
    /// ila bgiti diro fchi ficher mn endk
    move_uploaded_file($name2,'Files/'.$name);
    // katgolih ../Files/ khraj khotwa wahda gadi tal9a l ficher o dir tmak save
    move_uploaded_file($name2,'../Files/'.$name);
    echo '<h1>'.$name.'</h1>';
    echo '<h1>'.$name2.'</h1>';
}

?>