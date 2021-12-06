<?php
if($_POST['submit']){
  if($user_id=='')
      $user_id = $_POST['user_id'];


  $mysqli = new mysqli("mysql.eecs.ku.edu", "p162g473", "gei4ieCh", "p162g473");

  /* check connection */
  if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
  }

  $sql = "INSERT INTO Users (user_id) 
  Values ('$user_id')";

  if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}

$mysqli->close();

?>
