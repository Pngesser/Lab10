<!DOCTYPE html>
<html>
    <head>
        <title>View Posts</title>
    </head>
    <body>
        <form action="ViewUserPost.php" method="POST">
            <div>
                <label for="Users">List of Users: </label>
                <select name="Users" id="Users">
                    <?php
                    $mysqli = new mysqli("mysql.eecs.ku.edu", "p162g473", "gei4ieCh", "p162g473");

                        /* check connection */
                        if($mysqli->connect_error){
                            die("Connection failed: " . $mysqli->connect_error);
                            }

                        $query = "SELECT * FROM Posts";
                        $result = $mysqli->query($query);
                        
                        
                        while($row = $result->fetch_array()){

                            echo "<option name='Users' id='Users' vlaue=" . $row['author_id'] . "user'>" . $row['author_id'] . "</option>";

                        }
                        
                        $mysqli->close();
                        ?>
                </select>
            </div>
            <div>
              <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html> 