<?php
include '../php/DBconnect_4parm.php';


$help = $_POST["show_id"];
$sql = "SELECT $help, first_name, last_name, when_it_happened, how_many, alien_description, what_they_did, other_abductees
FROM alien_abduction
ORDER BY last_name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "<table><tr><th>ID</th><th>Name</th><th>When it Happened</th><th>How Long</th><th>How Many</th><th>Alien Description</th><th>
    What they did</th><th>Other Abductees</th><th>Abductee Description</th><th>Other Info</th><th>E-mail</th><th>Date Reported</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . " " . $row["last_name"] . "</td><td>" . $row["when_it_happened"] . "</td><td>" . $row["how_long"] . "</td>
        <td>" . $row["how_many"] . "</td><td>" . $row["alien_description"] . "</td><td>" . $row["what_they_did"] . "</td><td>" . $row["other_abductees"] . "</td><td>" . $row["abductee_description"] . "</td><td>" . $row["other_info"] . "</td><td>" . $row["email"] . "</td><td>" . $row["report_date"] . "</td></tr>";
    }
    echo "</table>";
}
else
{
    echo "0 results";
}

include '../php/DBclose.php';
?>
