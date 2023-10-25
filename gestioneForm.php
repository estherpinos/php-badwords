<?php

$paragrafo=$POST['paragrafo'];
$parola=$POST['parola'];

$lunghezza_paragrafo= strlen($paragrafo);

$paragrafo_modificato = str_replace($parola,'***',$paragrafo);
?>