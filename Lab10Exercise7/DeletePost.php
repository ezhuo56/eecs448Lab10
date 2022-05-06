<?php
 $mysqli = new mysqli("mysql.eecs.ku.edu", "e866z153", "iesoV9ph", "e866z153");

 if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
}

$list = $_POST['postnumber'];
if (isset($list)) 
{
    foreach ($list as $id)
     {
        $delete = "DELETE FROM Posts WHERE post_id='$id'";
        if ($mysqli->query($delete) === TRUE) {
            echo "You deleted post number " . "$id" . " from the database.";
        }
            
    }
}

$mysqli->close(); 
?>