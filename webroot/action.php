<?php
$nom= $_POST['nom'];
$prenom=$_POST['prenom'];
$login=$_POST['login'];
$mdp=$_POST['mdp'];
$mail=$_POST['mail'];
 
//, prenomU, loginU, pswdU, emailU
//include 'connexion.php'
$conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
  $query="INSERT INTO Utilisateur (nomU, prenomU, loginU, pswdU, emailU) VALUES ('$nom','$prenom', '$login', '$mdp', '$mail')";
$querycheck= "select nomU, prenomU, loginU, pswdU, emailU from Utilisateur";

if(mysqli_query($conn,$query)){
//  break;
  echo "<p>Compte cree avec succes !</p>";
  
}
  else
    echo "<p>Nom ou Prenom ou mot de passe deja utilises</p>";  
?>