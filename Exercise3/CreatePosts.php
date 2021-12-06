<?php
if($_POST['submit']){
  if($user_id=='' || $content=='')
      $user_id = $_POST['user_id'];
      $content = $_POST['content'];


  $mysqli = new mysqli("mysql.eecs.ku.edu", "p162g473", "gei4ieCh", "p162g473");

  /* check connection */
  if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
  }

 
  $userPost = "INSERT INTO Posts (content, author_id) Values ('$content', '$user_id')";


  if ($mysqli->query($userPost) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $username . "<br>" . $mysqli->error;
}
}

$mysqli->close();

?>