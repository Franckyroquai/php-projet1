<?php
session_start();

var_dump($_SESSION);
echo "<br>";
session_destroy();  // permet de détruire le contenu du tableau $_SESSION
                    // à la fin du script
unset($_SESSION); // détruit la variable

//var_dump($_SESSION);

?>

<?php
        // $temps_cookie = 3600*24*365;
        // setcookie("cookie[user]", "Jean", time()+$temps_cookie);
        // setcookie("cookie[age]", 45, time()+$temps_cookie);
        // setcookie("cookie[produit]", "Chemises", time()+$temps_cookie);

        // echo $_COOKIE["user"];

        // if(isset($_COOKIE["cookie"])){
        //     foreach ($_COOKIE["cookie"] as $key => $value) {
        //         echo "clé : ".$key."Valeur : ".$value."<br>";
        //     }
        // }

        $temps_cookie = 3600*24*365;
    $valeur_cookie = array("user" => "Jean", "age"=> 45, "produit"=> "Chemise");
    $valeur = serialize($valeur_cookie);
    setcookie("serialise", $valeur, time() + $temps_cookie,"/");
    if (isset($_COOKIE["serialise"])){
        $tableau_cookie = unserialize($_COOKIE["serialise"]);
        var_dump($tableau_cookie);
    }
        
        ?>