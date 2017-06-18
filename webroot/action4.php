<?php
$login=$_POST['login'];
$mdp=$_POST['mdp'];
$nomE=$_POST['nomE'];
$lieux=$_POST['lieux'];
$date=$_POST['date'];
$debut=$_POST['debut'];
$fin=$_POST['fin'];
$type=$_POST['type'];
$description=$_POST['description'];
$bool=false;
$boolA=false;
$boolN=false;
$conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
$ne=mysqli_query($conn,"SELECT loginEN,nomE,pswdU FROM Entraineur, Utilisateur");
$insert="Insert into Evenement (nomE,lieux,dateE,hdebut,hfin,typeE,descriptionE) VALUES ('$nomE','$lieux','$date','$debut','$fin','$type','$description')";
foreach($ne as $is){
  if($nomE==$is['nomE'] AND $login==$is['loginEN'] AND $mdp==$is['pswdU']){
  $bool=true;
 echo "<p>Vous etes bien coach de l'equipe</p>";
    
    
    if(mysqli_query($conn,$insert)){
   echo "<p>L'evenement a bien ete creee</p>";
     }else{
     echo "<p>L'evenement existe deja</p>";
 }
  }
}
if($bool==false){
   echo "<p>Vous n'etes pas Coach de l'equipe ou celle ci n'existe pas ou mauvais mdp</p>";
}



?>




<!-- Create table Evenement (
    nomE varchar(25) not null,
    lieux varchar(50) not null,
    dateE date not null,
    hdebut varchar(50) not null,
    hfin varchar(50) not null,
    typeE varchar(25) not null,
    descriptionE TEXT not null,
    PRIMARY KEY (nomE,lieux,dateE,hdebut,hfin)
    ); -->