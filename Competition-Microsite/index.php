<?php
  define('PUBLICISCOMP', 'PUBLICIS4COMP');
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['telephone'])) {
    $answer = strip_tags(mysql_escape_string($_POST['answer']));
    $name = strip_tags(mysql_escape_string($_POST['name']));
    preg_replace('/[^a-zA-Z0-9]/i', '', $name);
    $email = strip_tags(mysql_escape_string($_POST['email']));
    $telephone = strip_tags(mysql_escape_string($_POST['telephone']));
    include 'db.php';
    $SQL = "
      INSERT INTO `comp_entries`
      (`answer`,`name`,`email`,`telephone`)
      values
      ('$answer','$name','$email','$telephone');
      ";
    mysql_query($SQL) or die(mysql_error($db));
    mysql_close($db);
    header("Location: thankyou.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Competition</title>
    <link media="all" type="text/css" rel="stylesheet" href="http://normalize-css.googlecode.com/svn/trunk/normalize.css"/>
    <link media="all" type="text/css" rel="stylesheet" href="resources/css/main.css">
  </head>
  <body>
    <form id="competitionEntryForm" method="post" action="index.php">
      <input type="text" name="answer" required/>
      <br>
      <input type="text" name="name" minlength="2" required/>
      <br>
      <input type="email" name="email" required/>
      <br>
      <input type="text" name="telephone" required/>
      <br>
      <input type="submit" value="submit">
    </form>
    <!--[if lte IE 8]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
    <script type="text/javascript" src="resources/js/main.js"></script>
  </body>
</html>


