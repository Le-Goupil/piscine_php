<?php

    $source = $_FILES['drop_zone']
    var_dump($source);
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    

    try{
        $dbco = new PDO("mysql:host=$servername", $username, $password);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE pdodb";
        $dbco->exec($sql);
        echo 'Base de données bien créée !';
    }

    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }



























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