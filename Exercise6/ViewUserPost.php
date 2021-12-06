<?php

if($_POST['submit']){
    if($user_id=='' || $content=='')
        $user_id = $_POST['Users'];
        $content = $_POST['content'];
  
    
    $mysqli = new mysqli("mysql.eecs.ku.edu", "p162g473", "gei4ieCh", "p162g473");

    /* check connection */
    if($mysqli->connect_error){
        die("Connection failed: " . $mysqli->connect_error);
        }

    $query = "SELECT * FROM Posts WHERE author_id='$user_id'";
    $result = $mysqli->query($query);
          
    echo '<h2> Users: </h2>';
    echo "<table border='1'>";
    
    while($row = $result->fetch_array()){
        echo "<tr><td>" . $row['content'] . "<tr><td>";
    }

    echo "</table>";
    $mysqli->close();

}
          

?>