<?php

$paragrafo = $_POST['paragrafo'];
$parola = $_POST['parola'];

$lunghezza_paragrafo = strlen($paragrafo);

$paragrafo_modificato = str_replace($parola,'***',$paragrafo);

$lunghezza_paragrafo_modificato = strlen($paragrafo_modificato);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo "Paragrafo: $paragrafo" ?> </p>
    <p> <?php echo "lunghezza paragrafo: $lunghezza_paragrafo" ?> </p>
    <p> <?php echo "Paragrafo modificato: $paragrafo_modificato" ?> </p>
    <p> <?php echo "Lunghezza paragrafo modificato: $lunghezza_paragrafo_modificato" ?> </p>


</body>
</html>