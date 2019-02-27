<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>p3 Gavin B.</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/alien.css"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<div id="master">
  <div id="header">
    <h4>CIA Official Alien Abduction Form, by Gavin B., Last Edited Feb 09 2018</h4>
  </div>
  <div id="data">
    <h2>I was abducted by aliens! Help me CIA!</h2>

    <h4>Alien Abduction Reporting Form - CIA-ZX031:</h4>

    <form method="post" action="php/report.php">
      <table style="width:100%">
        <tr>
          <td>
            <label for="firstname">First name:</label>
            <input type="text" id="firstname" name="firstname" />
          </td>
          <br />
          <td>
            <label for="lastname">Last name:</label>
            <input type="text" id="lastname" name="lastname" />
          </td>
          <br />
          <td>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" />
          </td>
          <br />
        </tr>
        <tr>
          <td>
            <label for="whenithappened">When did it happen?</label>
            <input type="text" id="whenithappened" name="whenithappened" />
          </td>
          <br />
          <td>
            <label for="howlong">How long was the event?</label>
            <input type="text" id="howlong" name="howlong" />
          </td>
          <br />
          <td>
            <label for="howmany">How many aliens were there?</label>
            <input type="text" id="howmany" name="howmany" />
          </td>
          <br />
        </tr>
        <tr>
          <td>
            <label for="aliendescription">What did the aliens look like?</label>
            <input type="text" id="aliendescription" name="aliendescription" />
          </td>
          <br />
          <td>
            <label for="whatheydid">What did they do to you?</label>
            <input type="text" id="whatheydid" name="whatheydid" />
          </td>
          <td>
            <label for="didyouknow">Did you know these aliens?</label>
            <input type="text" id="didyouknow" name="didyouknow" />
          </td>
          <br />
        </tr>
        <tr>
          <td>
            <label for="otherabductees">Were there any other abductees?</label>
            <br />
            Yes <input id="otherabductees" name="otherabductees" type="radio" value="yes" /> <br />
            No <input id="otherabductees" name="otherabductees" type="radio" value="no" /> <br />
          </td>
          <td>
            <label for="russianspotted">Did you see any Russians?</label>
            <img id="russian" src="images/russian" width="100" height="175" alt="Russian" />
            <br />
            Yes <input id="otherabductees" name="otherabductees" type="radio" value="yes" /> <br />
            No <input id="otherabductees" name="otherabductees" type="radio" value="no" /> <br />

          </td>
          <td>
            <label for="other">Anything else you want to add?</label>
            <textarea id="other" name="other"></textarea><br />
            <input type="submit" value="Report Abduction" name="submit" />
          </td>
        </tr>
    </table>
    </form>

  </div>
  <div id="instructions">
    <h3>Step-by-Step Project Notes</h3>
    <br>
    <a href="docs/php_first_test.txt" target="_blank">
      <h4>Create an HTML form, read & verify with PHP</h4>
    </a>
    <a href="docs/dev_create_DB_table.txt" target="_blank">
      <h4>On Dev server create a DB, create a table, enter test data</h4>
    </a>
    <a href="docs/ops_create_DB_table.txt" target="_blank">
      <h4>On Internet server create DB, create table, enter test data -- must work for team.</h4>
    </a>
  </div>
  <div id="footer">
    <table style="width:100%">
  <tr>
    <th><a href="http://www.westada.org/mvhs" target="_blank"><img id="mvhs" src="logos/logo_mountainview-04.png"></a></th>
    <th><a href="http://www.westada.org/" target="_blank"><img id="wa" src="logos/westada_black-01_1.png"></a></th>
    <th><a href="http://www.westada.org/chs" target="_blank"><img id="chs" src="logos/logo_centennial-04.png"></a></th>
  </tr>
</table>
  </div>
</div>
</body>


</html>
