<?php

    
    $mysqli = new mysqli("mysql.eecs.ku.edu", "p162g473", "gei4ieCh", "p162g473");

    /* check connection */
    if($mysqli->connect_error){
        die("Connection failed: " . $mysqli->connect_error);
        }

    $query = "SELECT * FROM Users";
    $result = $mysqli->query($query);
          
    echo '<h2> Users: </h2>';
    echo "<table border='1'>";
    
    while($row = $result->fetch_array()){
        echo "<tr><td>" . $row['user_id'] . "</td></tr>";
    }
    echo "</table>";
    $mysqli->close();
          

?>