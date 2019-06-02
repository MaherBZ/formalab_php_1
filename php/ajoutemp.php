<?php
/*
echo "BONJOUR";
$x=2;
$y=5;
$res=1;
for ($i = 0; $i < $y; $i++) {
    $res=$res*$x;
}
echo ($res);
if ($res % 2 == 1)
{
   echo "$res est impair";
}
elseif ($res % 2 == 0)
{
   echo "$res est pair";
}
echo "<br>";*/
//importation fichier
include "config.php";
//recuperation de l'objet de connexion
$cxBase=connexion();
//connexion base de donnees

//recuperation des donnees
$a=$_POST['matricule'];
$n=$_POST['nom'];
$p=$_POST['prenom'];
echo "$a $n $p" ;
//preparation de requette d'insertion
$requette= "INSERT into emp VALUES ('$a','$n','$p')";
//execution de la requette
/*exec(), insert, update, delete=retourner un entier /boolean
boolean=false:erreur d'execution requette
entier=nombre de ligne modifie

query(), select=
*/
$res=$cxBase->exec($requette);
//resultat d'execution
if($res>0){
   echo "donnees insere avec succes!";
}else {
   echo"Erreur d'insertion";
}

?>
