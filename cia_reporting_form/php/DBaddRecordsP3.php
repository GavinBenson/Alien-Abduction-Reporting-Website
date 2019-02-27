<?php

include 'DBconnect_4parm.php';


//echo "<br><hr><br>";

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$other_abductees = $_POST['otherabductees'];
$abductee_description = $_POST['abducteedescription'];
$other = $_POST['other'];
$email = $_POST['email'];

//echo "<br><hr><br>";

$sql = "INSERT INTO alien_abduction
		VALUES (
			NULL,
			'$fname',
			'$lname',
			'$when_it_happened',
			'$how_long',
			'$how_many',
			'$alien_description',
			'$what_they_did',
			'$other_abductees',
			'$abductee_description',
			'$other',
			'$email',
			NULL)";

if ($conn -> query($sql) === TRUE)
{
	echo "<br>New single record created successfully<br>";
	//header("Location: ../index.php#viewRecords");
} else
{
	echo "<br>Error: " . $sql . "<br>" . $conn -> error . "<br>";
}

include 'DBclose.php';

?>
