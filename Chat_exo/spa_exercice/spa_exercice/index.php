<?php 



require('class/Autoloader.php');
Autoloader::register();
// spl_autoload_register(["Autoloader","autoload"]);
// require('class/Professionnel.php');
// require('class/Vehicule.php');


$chat_1 = new Chat("chacon",20,"bleuje","male","caniche");
$chat_2 = new Chat("moumoune",4,"orange","femelle","chat");
$chat_3 = new Chat("le chat",12,"vert","male","chat");
$chat_4 = new Chat("minou",8,"violet","male","persan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo php</title>
</head>
<body>
    <pre>
        <?php print_r($chat_1->getInfo())?>
        <?php print_r($chat_2->getInfo())?>
        <?php print_r($chat_3->getInfo())?>
        <?php print_r($chat_4->getInfo())?>

    </pre>
</body>
</html>

