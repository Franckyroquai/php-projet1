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
        <br>
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
        <br>
        <?php
        $age1 = 50;
            echo "\$age = $age";
        ?>
    </article>
    <article>
        <br>
        <?php
            echo "Concatenation";
        ?>
    </article>
    <article>
        <br>
        <?php
            $var = "Bonjour";
            echo $var," les amis !"." Comment allez-vous ?"; //, ou . permettent de concatener
            echo "$var les amis !"." Comment allez-vous ?"; 
            echo "\$var les amis !"." Comment allez-vous ?";
        ?>
    </article>
    <article>
        <br>
        <?php
            echo "Les constantes";
        ?>
    </article>
    <article>
        <br>
        <?php
            define("URL_SITE","https://localhost/1-Projets-php/php-projet1/");
            const AGE_TONY = 50;
            echo "L'url de notre site est : ".URL_SITE;
            echo "L'âge de Tony est ". AGE_TONY." ans.";
        ?>
    </article>
    <article>
        <br>
        <?php
            
            echo "Les opérateurs arithmétiques";
        ?>
    </article>
    <article>
        <br>
        <?php
        $x = 5;
        $y = 10;
        $z = $x + $y;
            echo "z = ".$z ."; ";
            echo "y - x = " ,$y - $x ."; ";
            echo "y * x = " .$y * $x."; ";
            echo "7 % 2 = ",7 % 2,";";
            echo 7%2;
            echo 8%2;
        ?>
    </article>
    <!-- /Incrementation/ -->
    <article>
        <br>
        <?php
            echo "La valeur de \$x est ".$x++;
            echo "<br>la nouvelle valeur de \$x est ".$x;
        ?>
        <br>
        <?php
            echo "La valeur de \$x est ".++$x;
            echo "<br>la nouvelle valeur de \$x est ".$x;
        ?>
        <br>
        <?php
            echo "La valeur de \$x est ".$x--;
            echo "<br>la nouvelle valeur de \$x est ".$x;
        ?>
        <br>
        <?php
            echo "La valeur de \$x est ".--$x;
            echo "<br>la nouvelle valeur de \$x est ".$x;
        ?>
        <br>
        <?php
            $x += 5;
            echo "+ 5, la valeur de \$x est ".$x;
        ?>
        <?php
            $x -= 5;
            echo "- 5, la valeur de \$x est ".$x;
        ?>
        <?php
            $x *= 5;
            echo "x 5, la valeur de \$x est ".$x;
        ?>
    </article>
    <article>
        <br>
        <h3>Les operateurs de comparaison</h3>
    </article>
    <article>
        <br>
        <?php
            $x = 10;
            $y = 10.0;
            $z = 15;
            $texte = "Bonjour";
            var_dump($x);
            echo " ; ";
            var_dump($texte);
            echo " ; ";
            var_dump($y);
            echo " ; ";
            var_dump($x==$y);
            echo " ; ";
            var_dump($x===$y);
            echo " ; ";
            var_dump($x!=$y);echo " ; ";
            var_dump($x!==$y);
            echo " ; ";
            var_dump($x < $z);
            echo " ; ";
            var_dump($x <= $z);
            // == égalité au sens large -> on teste uniquement la valeur
            // === egalite au sens strict -> valeur et type
            // != différence au sens large
            // !== différence au sens strict
        ?>
    </article>
    <article>
        <br>
        <h3>Les types de variables en php</h3>
    </article>
    <article>
        <br>
        <?php
        //scalaire
        $nombre = -50;
        $nombre2 = -3.141567;
        $texte = "Voici du texte";
        $resultat_test = true;
        var_dump($resultat_test);
        ?>
    </article>
    <article>
        <br>
        <h3>Les conditions If Else</h3>
    </article>
    <article>
        <br>
        <?php
        $age = "z";
        if ($age > 18) {
            echo "La personne est majeure !";
        }elseif ($age<18 && $age>0) {
            echo "La personne est mineure !!!";
        }
        else{
            echo "L'age n'est pas défini !";
        }
        echo "<br>Fin du document";
        
        ?>
    </article>
</body>

</html>