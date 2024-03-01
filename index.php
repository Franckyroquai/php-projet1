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
    <article>
        <br>
        <h3>L'instruction conditionnelle Switch</h3>
        <!-- Teste des cas précis  -->
    </article>
    <article>
        <br>
        <?php
        $age = 27;

       switch ($age) {
        case 20:   //$age == 20
            echo "Vous avez 20 ans";
            break;
        case 25:   //$age == 25
            echo "Vous avez 25 ans";
            break;
        case 30:   //$age == 30
            echo "Vous avez 30 ans";
            break;
        
        default:
            echo "Votre âge n'a pas été identifié";
            break;
       }
        
        ?>
    </article>
    <article>
        <br>
        <h3>La boucle For</h3>
    </article>
    <article>
        <br>
        <?php
        
        for ($i=0; $i < 100 ; $i=$i+2) { 
            echo"<h1>Bonjour".$i."</h1>";
        }
        
        ?>
    </article>
    <article>
        <br>
        <h3>La boucle While</h3>
    </article>
    <article>
        <br>
        <?php
        $var = 0;
        while ($var < 20) {
            echo "5 x ".$var." = ".$var*5;
            echo "<br>";
            $var++;
        }
        
        ?>
    </article>
    <article>
        <br>
        <h3>La boucle Do While</h3>
    </article>
    <article>
        <br>
        <?php
       
       $a = 0;
       do {
        echo $a."Bonjour <br>";
        $a++;
       } while ($a <= 10);
        
        ?>
    </article>
    <article>
        <br>
        <h3>Les tableaux</h3>
    </article>
    <article>
        <?php
        // $tableau = array("bleu","jaune","rouge",45);
        // $tableau[0] = "Verte";

        // echo $tableau[2];
        // var_dump($tableau);

        /*$marque = array();
        var_dump($marque);
        echo "<br>";
        $marque[0] = "Renault";
        $marque[1] = "Ford";
        var_dump($marque);*/

        /*$tableau = ["bleu","jaune","rouge",45];
        var_dump($tableau);    */

        /*$tableau = array();
        $tableau["id"] = "45";
        $tableau["nom"] = "Paul";
        $tableau["Marque"] = "Renault";
        $tableau["info"] = array(12, "jaune");
        var_dump($tableau);
        echo"<br>";
        echo $tableau["id"];*/

        // const MARQUE = array("Renault","Ford");
        // echo MARQUE[0];
        // var_dump(MARQUE);

        //define("MARQUE",array("Renault","Ford"));
        //var_dump(MARQUE);

        // for ($i=0; $i < 2; $i++) { 
        //     echo MARQUE[$i]."<br>";
        // }

        /*foreach (MARQUE as $key => $value) {
            echo "La clé est : ".$key.", sa valeur est : ". $value."<br>";
        }*/

        $personne = array();
        $personne["nom"] = "Dupond";
        $personne["prenom"] = "Julie";
        $personne["email"] = "julie456@julie.fr";
        $personne["Tel"] = "0123456789";
        
        $result = in_array("Julie", $personne);
        //var_dump(sizeof($personne));
        var_dump($result);
        
        
        ?>
    </article>
    <article>
        <br>
        <h3>Les Fonctions</h3>
    </article>
    <article>
        <br>
        <?php
        // phpinfo();
        function prixTTC($prixHT=20){
            $tva = 20;
            return $prixHT*(100+$tva)/100;
        }
        $valeurTTC = prixTTC(500);
        echo "Le prix du produit est : " .$valeurTTC;

        function concat($mot1, $mot2){
            return $mot1." ".$mot2;

        }

        $concat = concat("Bonjour", "Tony");
        echo "<br>".$concat;


        function test(?string $var):?string{
            return $var;
        }
        var_dump(test(NULL));
        
        ?>
    </article>
    <article>
        <br>
        <h3>Les Portés de Variables</h3>
    </article>
    <article>
        <?php
        $tva = 50;
            function prix2TTC(int $prixHT):float {
                global $tva;
                return $prixHT*(100+$tva)/100;
            }
            $valeurTTC = prix2TTC(700);
            echo "Le prix du 2eme produit est : ".$valeurTTC." €";
            echo "<br> La valeur de la 2eme tva est : ".$tva." %";

            function numeroJoueur(){
                static $numero = 0;
                $numero++ ;
                echo "Le joueur a le numéro : ".$numero.", et c'est bien !";
            }

            echo "<br>";
            numeroJoueur();
            echo "<br>";
            numeroJoueur();
            echo "<br>";
            numeroJoueur();
            echo "<br>";
            numeroJoueur();



        ?>
    </article>
    <article>
        <br>
        <h3>Les Objets en PHP</h3>
    </article>
    <article>
        <?php
        class Etudiant{
            // Les Attributs
            private $identifiant;
            private $nom;
            private $filiere;
            private $matieres;
            private $inscrit;

            // Le Constructeur de la classe
            function __construct($ident, $nom, $filiere, $matieres){
                $this->identifiant = $ident;
                $this->nom = $nom;
                $this->filiere = $filiere;
                $this->matieres = $matieres;
                $this->inscrit = true;
            }


            // Les Méthodes
            function sepresenter(){
                if ($this->inscrit){
                    $result = "Mon identifiant est : ".$this->identifiant."<br>";
                $result .= "Mon nom est : ".$this->nom."<br>";
                $result .= "J'étudie dans la filière : ".$this->filiere."<br>";
                $result .= "Voici mes matières : <br>";
                foreach($this->matieres as $key => $value){
                    $result.= $value."<br>";
                    }
                    return $result;
                } else {
                    echo "Désolé, l'étudiant n'est pas inscrit";
                }
        }
        function statut(){
            $this->inscrit = !$this->inscrit;
        } 
    }
    $jean_Matiere = array("Francais", "Programmation", "Algorithme");
    $jean = new Etudiant("AE45", "Jean", "Informatique", $jean_Matiere);

    echo $jean->sepresenter();

    echo "<br>";

    $john_matiere = array("Philosophie", "Anglais", "Art");
    $john = new Etudiant("AZ34","John", "Philosophie", $john_matiere);
    $john->statut();
    echo $john->sepresenter();

        
        ?>
    </article>
</body>

</html>