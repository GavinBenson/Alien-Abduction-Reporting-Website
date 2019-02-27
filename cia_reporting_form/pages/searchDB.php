<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../css/searchDBPage.css">
  <title>Search Alien DB</title>
</head>

<body>
  <div id="master">
    <div id="header">
      <h1>Searching Alien DB</h1>
      <h2>By Gavin B.</h2>
      <h2>Last Updated: March 5, 2018</h2>
    </div>

    <div id="database">
      <h3>1. Select * -- search entire DB for diagnostics only</h3>
      <h3>2. Select id, firstname, lastname -- sort by firstname alphabeticle</h3>
      <h3>3. SELECT id, firstname, lastname -- sort by lastname alpha</h3>
      <h3>4. Show an entire record  by entering an ID</h3>
      <h3>5. Delete an entire record by entering an ID</h3>
      <h4>Item 4 and 5 are grade checkpoint</h4>
      <h3>6. Update a record starting with ID</h3>
      <h4>(Item 6 is a grade checkpoint)</h4>
      <h3>END OF PROJECT 3!</h3>
      <h1>1.</h1>
      <?php include '../php/DBconnect_4parm.php'; ?>
      <?php include '../php/DBtableShow.php'; ?>
      <?php include '../php/DBclose.php'; ?>
      <h1>2.</h1>
      <?php include '../php/DBconnect_4parm.php'; ?>
      <?php include '../php/DBtableShow2.php'; ?>
      <?php include '../php/DBclose.php'; ?>
      <h1>3.</h1>
      <?php include '../php/DBconnect_4parm.php'; ?>
      <?php include '../php/DBtableShow3.php'; ?>
      <?php include '../php/DBclose.php'; ?>
      <h1>4.</h1>
      <?php include '../php/DBconnect_4parm.php'; ?>
      <?php include '../php/searchDB.php'; ?>
      <?php include '../php/DBclose.php'; ?>
      <h1>5.</h1>
      <?php include '../php/DBconnect_4parm.php'; ?>
      <?php include '../php/delete.php'; ?>
      <?php include '../php/DBclose.php'; ?>
      <!--<h3>Show single ID</h3>
      <form method="post" action="../php/getID.php">

        <label for="select_it">Select ID:</label>
        <input type="text" id="show_id" name="show_id" />
        <input value="Submit" type="submit" name="submit" />
      </form>
      <h1>6.</h1>
      <input type="text" id="updateid" name="updateid" />
    </div>
-->
    <div id="instructions">
      <h3>Instructions</h3>
    </div>

    <div id="footer">
      <h3>Footer</h3>
    </div>
  </div>
</body>

</html>
