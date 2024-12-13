<?php
// cour 59 video 60
// COOKIE
// far9 mabin COOKIE O SESSION SESSION ila sditi page katmsah cookie la katb9a o nta li kat3tiha date imta tamsah
// pour creation d'un var cookiesetcookie('nomvar',"valeur")
setcookie('name',"said");
// pour modifier var cookie
setcookie('name',"Hamza");
echo '<h1>'.$_COOKIE["name"]."<h1/>";
// pour supprimer var cookie kaytmsah fi blasa
setcookie('name',"",time()-3600);
// bach tetih lwa9t ela hsabak nta kat3tih wa9t bi s
setcookie('name',"",time()+60);
?>
