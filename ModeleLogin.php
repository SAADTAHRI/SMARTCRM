
<?php
// Etablir la Connexion
include 'ConnexionMySql.inc.php';


  
  $email=$_POST['email3'];

  $password=$_POST['password3'];
  

  if( $email != '' && $password != '' ){

      mysqli_query($con,"INSERT INTO `login` (`id`, `email`,`password`) 
      VALUES  (NULL,'".$email."','".$password."')");

      echo json_encode( array("status" => 1,"message" => "Enregistrement ajouter avec Succée.") );
      header("location:login.html");
      exit;
  }
  else{
      echo json_encode( array("status" => 0,"message" => "Merci de compléter tous les champs.") );
      exit;
  }

  

?>