<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" value="entre votre photo" required>
    <button name="submit" type="submit">Send</button>
</form>
<?php
// cour 52 video 53 et cour 53 video
// $_FILES['']['size'] // stockage dyal file hajm : kb:/1024,mb:/1024/1024 defaul(K)
// $_FILES['']['type'] // kateraf no3 dyal ficher li jak
if(isset($_POST['submit'])){
    if((($_FILES['file']["size"]/1024/1024)>=2)&&($_FILES['file']["type"]==="video/quicktime")){
        echo ($_FILES['file']["size"]/1024/1024)." "."mb";
        echo "<br/>";
        echo $_FILES['file']["type"];
        echo "<h1>fichier plus grand</h1>";
    }else{
        echo ($_FILES['file']["size"]/1024/1024)." "."mb";
        echo "<br/>";
        echo $_FILES['file']["type"];
        echo "<h1>fichier plus petit</h1>";
        echo "<h1>donner video s'il vous plait</h1>";
    }
}
?>