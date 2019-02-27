<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-type" content="text/html" charset="UTF-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
  <link rel="stylesheet" type="text/css" href="../css/report.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>

<body>
  <h2>Aliens Abducted Me! - Report an Abduction</h2>

<?php
  require "DBaddRecordsP3.php";

  $name = $_POST['firstname'].' '.$_POST['lastname'];
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $alien_description = $_POST['aliendescription'];
  $what_they_did = $_POST['whattheydid'];
  $other_abductees = $_POST['otherabductees'];
  $abductee_description = $_POST['abducteedescription'];
  $other = $_POST['other'];
  $email = $_POST['email'];

  echo 'Thanks for submitting the form!<br>';
  echo 'Hello, ' . $name . '!<br>';
  echo 'You were abducted ' . $when_it_happened;
  echo ' and were gone for ' . $how_long . '<br>';
  echo 'Number of aliens: ' . $how_many . '<br>';
  echo 'Describe them: ' . $alien_description . '<br>';
  echo 'The aliens did this: ' . $what_they_did . '<br>';
  echo 'Were there any other abductees? ' . $other_abductees . '<br>';
  echo 'Description of the abductees: ' . $abductee_description . '<br>';
  echo 'Other comments: ' . $other . '<br>';
  echo 'Your email address is ' . $email;

  echo '<hr>';
  echo 'Meta Data';

  $indicesServer = array(
    'PHP_SELF',
    'GATEWAY_INTERFACE',
    'SERVER_ADDR',
    'SERVER_NAME',
    'SERVER_SOFTWARE',
    'SERVER_PROTOCOL',
    'REQUEST_METHOD',
    'REQUEST_TIME',
    'REQUEST_TIME_FLOAT',
    'QUERY_STRING',
    'DOCUMENT_ROOT',
    'HTTP_ACCEPT',
    'HTTP_ACCEPT_CHARSET',
    'HTTP_ACCEPT_ENCODING',
    'HTTP_ACCEPT_LANGUAGE',
    'HTTP_CONNECTION',
    'HTTP_HOST',
    'HTTP_REFERER',
    'HTTP_USER_AGENT',
    'HTTPS',
    'REMOTE_ADDR',
    'REMOTE_HOST',
    'REMOTE_PORT',
    'REMOTE_USER',
    'REDIRECT_REMOTE_USER',
    'SCRIPT_FILENAME',
    'SERVER_ADMIN',
    'SERVER_PORT',
    'SERVER_SIGNATURE',
    'PATH_TRANSLATED',
    'SCRIPT_NAME',
    'REQUEST_URI',
    'PHP_AUTH_DIGEST',
    'PHP_AUTH_USER',
    'PHP_AUTH_PW',
    'AUTH_TYPE',
    'PATH_INFO',
    'ORIG_PATH_INFO'
  );

echo '<table id="metadata_table">';
foreach($indicesServer as $arg)
{
  if(isset($_SERVER[$arg]))
  {
    echo '<tr><td class="title">' . $arg . '</td><td>' . $_SERVER[$arg] . '</td></tr>';
  }
  else
  {
    echo '<tr><td class="title">' . $arg . '</td><td>-</td></tr>';
  }
}

echo '</table>';
?>

</body>
</html>
