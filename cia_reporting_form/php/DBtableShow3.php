<?php

$sql = "SELECT id, first_name, last_name
FROM alien_abduction
ORDER BY last_name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . " " . $row["last_name"] . "</td></tr>";
    }
    echo "</table>";
}
else
{
    echo "0 results";
}


?>
