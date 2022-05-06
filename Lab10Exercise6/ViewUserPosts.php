<?php
    $username = $_POST["username"];
    echo $username . "'s Posts:<br>";


$mysqli = new mysqli("mysql.eecs.ku.edu", "e866z153", "iesoV9ph", "e866z153");

if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
}
echo "<table border='1'>";
$query = "SELECT content from Posts WHERE author_id='$username' ";
$result = $mysqli->query($query);
if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row["content"] . "</td>";
        echo "</tr>";
    }
}
echo "</table>"
?>
