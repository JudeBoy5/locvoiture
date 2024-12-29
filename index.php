<?php
    require_once 'bd/connexionBD.php';

    include_once 'pages/connexion.php';
    include 'bd/authentification.php';

    if(isset($_POST['connexion'])){
        $user = findUserByLoginAndPass($_POST['username'],$_POST['password']);
        // var_dump($user);
        // die();
        if($user){
            header ("location:http://localhost/Php2/locVoiture/pages/accueil.php");
        }else{
            header ("location:http://localhost/Php2/locVoiture/");
        }
    }
    if(isset($_POST['inscrire'])){
        extract($_POST);
        $ok = inscription($nomclient,$prenomclient,$adresseclient,$telclient,$emailclient,$NIN,$login,$password,$genreclient);
        if($ok==1){
            header ("location:http://localhost/Php2/locVoiture/");
        }else{
            header ("location:http://localhost/Php2/locVoiture/pages/inscription.php");
        }
        
    }