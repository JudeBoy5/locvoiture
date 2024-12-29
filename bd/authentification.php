<?php

    require_once 'connexionBD.php';

    function findUserByLoginAndPass($login, $mdp)
    {
    //On définit la la requete
    $sql = "SELECT distinct * FROM client WHERE login='$login' AND password='$mdp' ";
    
    //on recupère la variable qui a été définit dans conBD.php
    // Cette variable contient la liaison à la BD Donc il nous permettra d'accèder aux fonctions d'exécution des requêtes
    global $connexion; // Obligatoirement, on met le mm nom que dans connexionect_bdd.php

    // Exécution de la requête

    $exe = $connexion->query($sql); //on utilise la fonction query car on a une requête SELECT

    // Retourner le résultat trouvé
    $result  = $exe->fetch();
    // var_dump($result);
    // die();
    return $result; // fetch() parce que cette requete retourne au plus un résultat
    }
    function inscription($nomclient,$prenomclient,$adresseclient,$telclient,$emailclient,$NIN,$login,$password,$genreclient) {
        global $connexion;
        $sql="INSERT INTO client (nomclient, prenomclient, adresseclient, telclient, emailclient, NIN, login, password, genreclient) VALUES ('$nomclient', '$prenomclient', '$adresseclient', '$telclient', '$emailclient','$NIN', '$login', '$password', '$genreclient')";
        //var_dump($sql);
        return $connexion->exec($sql); 
    }
    

//findUserByLoginAndPass('mdiop','password123');

