<?php
$login=$_POST['login'];
$mdp=$_POST['mdp'];
$nomE=$_POST['nomE'];
$logim=$_POST['logim'];
$bool=false;
$boolA=false;
$boolN=false;
$conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
$ne=mysqli_query($conn,"SELECT nomE,Admin,pswdU FROM Equipe,Utilisateur");
$mdpi=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
$member=mysqli_query($conn,"SELECT loginM FROM Membre where nomE in ('$nomE')");
$insert="insert into Entraineur (loginEN,nomE) values ('$logim','$nomE')";
foreach($ne as $is){
if($nomE==$is['nomE'] AND $login==$is['Admin']){
  $boolA=true;
 echo "<p>Vous etes bien admin de l'equipe</p>";
}

}
if($boolA==false){
   echo "<p>Vous n'etes pas Admin de l'equipe ou celle ci n'existe pas</p>";
}
if($boolA==true){
  foreach($mdpi as $value){
    if($login==$value['loginU'] AND $mdp==$value['pswdU']){
      $bool=true;
      echo "<p>Bon mdp</p>";
       
    }
    
  }
  if($bool==false){
     echo "<p>Mauvais mdp</p>";
  }
    
}
  
if($bool==true){
  foreach($member as $m){
  if($logim==$m['loginM']){
    $boolN=true;
    echo "<p>il fait parti de l'equipe</p>";
    if(mysqli_query($conn,$insert)){
  echo "<p>he is the new coach</p>";
  }
  else{
    echo "<p>he is already the coach</p>";
  }
  }
  }
  if($boolN==false){
    echo "<p>il fait pas parti de l'equipe</p>";
  }
}

  
?>