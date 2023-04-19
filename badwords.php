<?php
//Mi salvo qui tutte le variabili che mi servono

$badword = $_GET['badword'];
$originalParagraph = $_GET['paragraph'];
$paragraphLength = strlen($originalParagraph);
$badwordParagraph = str_replace($badword, '***', $originalParagraph);
$badwordParagraphLength = strlen($badwordParagraph);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>

<body>

    <h1>
        Paragrafo Originale
    </h1>
    <p>

        <?php


        echo $originalParagraph;

        ?>
    </p>

    <h2>
        Parola da Censurare:
    </h2>

    <span><?php echo $badword ?></span>

    <h3>Lunghezza del Paragrafo:</h3>

    <span>
        <?php echo  $paragraphLength ?>
        caratteri
    </span>

    <h3>
        Paragrafo con parola censurata:
    </h3>
    <p>
        <?php echo str_replace($badword, '***', $originalParagraph) ?>
    </p>

    <h3>
        Lunghezza del paragrafo con censura:
    </h3>
    <span>
        <?php echo $badwordParagraphLength ?>
        caratteri
    </span>








</body>

</html>