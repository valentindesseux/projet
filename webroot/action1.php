<?php

$login=$_POST['login'];
$mdp=$_POST['mdp'];
$nomE=$_POST['nomE'];
$pswdE=$_POST['mdpE'];
$sports=$_POST['sports'];
$ville=$_POST['ville'];
$description=$_POST['comment'];
$mixite=$_POST['mixite'];
$bool=false;
//include 'connexion.php'
$conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
  $res=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
$equipecreer="Insert into Equipe (nomE,pswdE,sports,ville,description,mixite,Admin) VALUES ('$nomE','$pswdE','$sports','$ville','$description','$mixite','$login')";
foreach($res as $value){
  
if($login==$value['loginU'] AND $mdp==$value['pswdU']){
  //echo "<p>reussi</p>";
  $bool=true;
  
  
  if(mysqli_query($conn,$equipecreer))
  echo "<p>L'equipe a bien ete creee</p>";
  else
    echo "<p>L'equipe existe deja</p>";
  
}
}
    if($bool==false){
 
    echo "<p>Mauvais Login ou Nom ou Mot de passe !</p>";
   
    
   }
  
?>