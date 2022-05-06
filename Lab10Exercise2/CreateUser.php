
<?php
        $username = $_POST["uName"];

        $mysqli = new mysqli("mysql.eecs.ku.edu", "e866z153", "iesoV9ph", "e866z153");

        if ($mysqli->connect_errno) 
		{
            printf("Connect failed: %s\n", $mysqli->connect_error);
        }

        if(!isset($username) || trim($username) == '')
        {
           echo "Text field was left blank. Try again with a filled in username";
        }
        else 
		{

            $checkUser = $mysqli->query("SELECT * From Users WHERE user_id = '$username' ");
            if($checkUser -> num_rows == 0) 
			{
                $sql = "INSERT INTO Users (user_id) VALUES ('$username')";
                
                if($mysqli ->query($sql) == TRUE) 
				{
                    echo "New User added";
                }
                else 
				{
                    echo "Error. That username does not work" . $sql . "<br>" . $mysqli ->error;
                }
            }
            else 
			{
                echo "user already exist!";
            }


        } 

        $mysqli->close();
    ?>

