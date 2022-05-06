<?php
         $username = $_POST["uName"];
         $posts = $_POST["post"];
        
        $mysqli = new mysqli("mysql.eecs.ku.edu", "e866z153", "iesoV9ph", "e866z153");

        if ($mysqli->connect_errno) 
		{
            printf("Connect failed: %s\n", $mysqli->connect_error);
        }

        if(!isset($username) || trim($username) == '')
        {
           echo "Please enter username. It was blank.";
        }
        else 
		{
            
            $checkUser = $mysqli->query("SELECT * From Users WHERE user_id = '$username' ");
            if($checkUser -> num_rows == 0) {
                echo "User does not exist in the database";
            }
            else 
			{
                
                $sql = "INSERT INTO Posts (content, author_id) VALUES ('$posts', '$username')";
                
                if($mysqli ->query($sql) == TRUE) 
				{
                    echo "Post Added";
                }
                else 
				{
                    echo "Error. Username doesn't work" . $sql . "<br>" . $mysqli ->error;
                }
            }
        } 

        $mysqli->close();
        
    ?>