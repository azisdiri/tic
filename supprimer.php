<?php
$host = 'localhost';
$user = 'root';
$bdd = 'formation';
$passwd = '';
$num = $_POST['num'];

// Connexion au serveur
mysql_connect($host, $user,$passwd) or die("erreur de connexion au serveur");
// Connexion à la base
mysql_select_db($bdd) or die("erreur de connexion a la base de données");
// Creation et envoi de la requete
$req=mysql_query("DELETE FROM  inscription WHERE num='$num'");
if(mysql_affected_rows()==-1){
    die("La suppression a échouée");
    }
    else { echo "l étudiant a été supprimé avec succès";}

// Deconnexion de la base de donnees
mysql_close();
?>


