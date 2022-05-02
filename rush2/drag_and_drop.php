<!DOCTYPE html>

    <?php
      if(!empty($_POST['Identifiant']) && !empty($_POST['Password']) && !empty($_POST['Email'])){
        $Id = $_POST['Identifiant'];
        $Pw = $_POST['Password'];
        $Email = $_POST['Email'];
    
      $servername = "";
      $username = "";
      $password = "";
      $dbname = "";
 
      $conn = mysqli_connect($servername, $username, $password, $dbname);
 
      $sql = "INSERT INTO comptes (Identifiant, Pw, Email) VALUES ('$Id', '$Pw', '$Email')";
 
      if($conn->query($sql) === TRUE){
        echo"querry";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    ?>
<!--
  Aucun input n'est remplit
  page de base
-->
    <?php
      } else if(empty($_POST['Identifiant']) && empty($_POST['Password']) && empty($_POST['Email'])){
    ?>
      <form action="index.php" method="POST" class="box" id="form1" onsubmit="return(Verify());">
        <h1>Inscription</h1>
        <input type="text" name="Identifiant" placeholder="Identifiant">
        <input type="password" name="Password" placeholder="Mot de passe">
        <input type="email" name="Email" placeholder="Email">
        <input type="submit" value="Envoyer">
      </form>
    <?php
      }
    ?>
 
    <script url="drag_and_drop.js"></script>>
 
    <?php
       
      $servername = "";
      $username = "";
      $password = "";
      $dbname = "";
 
      $sql = mysqli_connect($servername, $username, $password, $dbname);
      echo "connected <br/>"; //Marche
 
      $phpvar= $_COOKIE['data'];
      echo($phpvar); //Marche
       function testid($user)
      {
        $sql = $GLOBALS['sql'];
        $query = mysqli_query($sql, "SELECT drop_zone FROM comptes WHERE Identifiant='$user'") or die(mysqli_error($sql));
        $rep = mysql_fetch_assoc($query);
        return $rep['drop_zone'];
      }
    ?>
  </body>
</html>