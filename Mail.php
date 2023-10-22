<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Destination="djuny.alain@gmail.com";
    $Sujet = "Monsieur vous avez recu un nouveau client";
    $message = "contenu de mail";
    $header = "From : djunystore@gmail.com";
    if(mail($Destination,$Sujet,$message,$header)){
        echo "Envoie réussie";
    }else {echo "Veillez ressayer";}
    ?>
</body>
</html>