<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-projet1</title>
</head>
<title>
    <?php
       echo "<h1>Zou, Hello World !</h1>";
    ?>
</title>
<body>
    <?php
       $nom = "Franck";
       $age = 47;
    ?>
    Mon nom est <?php echo $nom; ?>, et mon age est <?php echo $age; ?> ans.
    
    <article>
        <?php
            $texte = "Bonjour je m'appelle";
            $texte1 = "Bonjour les \"amis\"";
            // \ permet d'indiquer au navigateur que la quote est du texte
            echo $texte1;
            echo $texte[0];
            // l'array indique le numéro de la lettre de la string à afficher, ici 0 est la première lettre B
        ?>
    </article>
    <article>
        <?php
        $age1 = 50;
            echo "\$age = $age";
        ?>
    </article>
</body>

</html>