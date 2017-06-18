<!DOCTYPE html>
<html>
 <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
#event{
    width:450px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
#event .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
#event label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
#event input[type="text"],

#event input[type="password"],
#event textarea,
#event select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

#event .section {
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
#event .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
#event input[type="button"], 
#event input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
#event input[type="button"]:hover, 
#event input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}

</style>
<body>
   
  <form action="action4.php" method="POST" id="event" >
     <div class="form-style-10">
    <h1>Creer un evenement
       <span>Rappel pour creer un evenement vous devez etre entraineur de l'equipe</span></h1>
    </div>
   <br><br>
   <div class="section"><span>1</span>Vos Identifiants</div><br><br> 
  <div class="inner-wrap">   
  <label>Login:<br>
    <input type="text" name="login" required></label>
  <br>
    
  <label>Mot de Passe:<br>
    <input type="password" name="mdp" required></label>
  <br>
  </div>
   <div class="section"><span>2</span>Evenement</div><br><br>
  <div class="inner-wrap">
    <label>Equipe concernee:<br>
      <input type="text" name="nomE" required></label>
  <br>
     <label>Lieux:<br>
       <input type="text" name="lieux" required></label>
  <br>
    <label>Date:<br>
      <input type="date" name="date" required></label>
  <br>
     <label>Debut:<br>
       <input type="time" name="debut" required></label>
  <br>
     <label>Fin:<br>
       <input type="time" name="fin" required></label>
  <br>
    <label>Typ of event:<br>
   <input type="radio" name="type" value="entrainement" checked> Entrainement<br>
      <input type="radio" name="type" value="competition"> Competiton<br></label>
  <br>
    <label>Description:<br>
    <textarea rows="4" cols="50" name="description" form="event">
      Enter text here...</textarea><br></label>
  <br>
  </div>
    
       <input type="submit" value="Create Event">
   </form><br><br>
  
  </body>
</html>
  
  