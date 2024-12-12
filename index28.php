<?php
// cour 48 video 49
// composer // kay etik bzaf dyal les bibliothèques li kayeawnok fi code dyalk kaykono wajdin

?>
<?php
// pdf cour 48 video 49 et cour 49 video 50
?>
<?php

require_once __DIR__ . '/vendor/autoload.php';

//$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
?>
