<?php

    $mysqli = new mysqli("mysql.eecs.ku.edu", "p162g473", "gei4ieCh", "p162g473");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    
    $delete = $_POST["checkbox"];
    
    foreach($delete as $value)
    {
        $query = "DELETE FROM Posts WHERE post_id = '$value'";
        if($mysqli->query($query) === TRUE)
        {
            echo "Post id: " .$value. " deleted.";
            echo "<br>";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
    
    /* close connection */
    $mysqli->close();
          

?>