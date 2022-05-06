<?php
        $mysqli = new mysqli("mysql.eecs.ku.edu", "e866z153", "iesoV9ph", "e866z153");
		
		if($mysqli->connect_errno)
		{
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
		
		 $sql = "SELECT user_id FROM Users";
         $results = $mysqli->query($sql);
		 echo "<table border='1'>
		 <tr>
		 <th>Users</th>
		 </tr>";

         if($results -> num_rows > 0)
         {
             while($row = $results->fetch_assoc())
			 {
				 echo "<tr>";
				 echo "<td>" . $row["user_id"];
				 echo "<tr>";
			 }
			 echo "</table>";
         }
		 else
		 {
			 echo "No users exist!";
		 }
		 $mysqli->close();
		
?>