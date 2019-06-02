<?php
//definition d'une base de donnees de connexion a la base de donnees
function connexion(){
    $server='localhost';
    $base='travail';
    $username='root';
    $password='';
    try {
        //connexion base donnees 

        //creation d'un objet de connexion
        $con=new PDO("mysql:host=$server; dbname=$base", $username, $password); 
        //retourner l'objet de connexion
        return $con;
        //code
    }catch (PDOException $e){
        //gestion d'exception
        $messageErreur=$e->getMessage();
        die("erreuuur: $messageErreur");
    }
    }
?>