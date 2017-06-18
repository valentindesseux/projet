
<?php
$login=$_POST['login'];
$mdp=$_POST['mdp'];
$nomE=$_POST['nomE'];
$pswdE=$_POST['mdpE'];
$bool=false;
$boolc=false;
$conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
 $res=mysqli_query($conn,"SELECT loginU, pswdU FROM Utilisateur");
$equipe=mysqli_query($conn,"SELECT nomE, pswdE FROM Equipe");
$join="insert into Membre (loginM,nomE) values ('$login','$nomE')";
foreach($res as $value){
  
  if($login==$value['loginU'] AND $mdp==$value['pswdU']){
    $boolc=true;
  //echo "<p>reussi</p>";
  
  foreach($equipe as $valuE){
    if($nomE==$valuE['nomE'] AND $pswdE==$valuE['pswdE']){
      $bool=true;
  if(mysqli_query($conn,$join)){
  echo "<p>good</p>";
  }
  else{
    echo "<p>you are already on the team</p>";
  }
      
    }
    
  }
   
    if($bool==false){
      echo "<p>erreur d'identification</p>";
        
    }  
}
   
}
 if($boolc==false){
 
    echo "<p>Mauvais Login ou Nom ou Mot de passe !</p>";
   
    
   }

?>