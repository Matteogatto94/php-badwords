<?php

$sentence = $_GET['sentence'];
$badword = $_GET['badword'];
$newsentence = str_ireplace($badword, '***', $sentence);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>
<body>
    <p><?php echo $sentence; ?></p>
    <p><?php echo 'La frase corrente è lunga ' . strlen($sentence) .' caratteri' ?></p>

    <p><?php echo $newsentence; ?></p>
    <p><?php echo 'La stringa corrente è lunga ' . strlen($newsentence) .' caratteri' ?></p>

    
    
</body>
</html>