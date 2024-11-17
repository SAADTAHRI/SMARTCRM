
<?php
// Etablir la Connexion
include 'ConnexionMySql.inc.php';


  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  

  if( $name!='' && $email != '' && $phone != '' && $password != '' ){

      mysqli_query($con,"INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `password`) 
      VALUES  (NULL,'".$name."','".$email."','".$phone."','".$password."')");

      echo json_encode( array("status" => 1,"message" => "Enregistrement ajouter avec Succée.") );
      header("location:index.html");
      exit;
  }
  else{
      echo json_encode( array("status" => 0,"message" => "Merci de compléter tous les champs.") );
      exit;
  }

  

?>