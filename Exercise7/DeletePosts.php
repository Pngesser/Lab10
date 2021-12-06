<!DOCTYPE>
<html>
    <head>
        <title>
            Delete Post
        </title>
    </head>
    <body>
    <form action = "DeletePost.php" method = "POST">
<table>
<tr><td>User</td><td>Post</td><td>Delete?</td></tr>
<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "p162g473", "gei4ieCh", "p162g473");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM Posts ORDER BY author_id ASC";

if ($result = $mysqli->query($query))
{

	while ($row = $result->fetch_assoc())
	{
		$author = $row["author_id"];
		$content = $row["content"];
		$post_id = $row["post_id"];
		echo "<tr><td>";
		echo $author;
		echo "</td><td>";
		echo $content;
		echo "</td><td>";
		echo "<input type='checkbox' name = 'checkbox[]' value = '";
		echo $post_id;
		echo "'>";
		echo "</td></tr>";
    	}


	echo "<tr><td colspan = 3><input type='submit' value = 'Submit'></td></tr>";



    	$result->free();
}

$mysqli->close();

?>


</table>

</form>
    </body>
</html>