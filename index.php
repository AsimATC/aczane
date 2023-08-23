<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eczane Api</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        body * {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
</head>

<body>
    <?php

    $site = "https://www.neo.org.tr/nobetci-eczaneler";
    $bolme = ('@<div class="eight columns bottom-1">(.*?)</div>@si');
    $arama = file_get_contents($site);
    preg_match_all($bolme, $arama, $siir);

    //echo "<pre>";
    //print_r($siir);
    //echo "</pre>";

    //echo '<pre>';
    //print_r($siir[0][0]);
    //echo '</pre>';

    foreach ($siir as $siiryaz) {

        echo $siiryaz[0];
        echo $siiryaz[1];
        echo $siiryaz[2];
        echo $siiryaz[3];

    }
    ?>
</body>

</html>