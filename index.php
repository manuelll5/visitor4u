<?php
  session_start();

  include "connect.php";

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM user";
  $user = $pdo->query($sql)->fetch();

  if($username == $user['username'] and $password == $user['password']) {
    echo "username und passwort ist korrekt";
  }else{
    echo "nicht korrekt";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Visitor4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/textareaAndBtnBorderInColor.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
      <div class="center1">
        <img src="logo/visitor4u.png" alt="V4U-Logo" class="m4u_logo">
        <form action="index.php" method="post">
          <div class="form-group fg1 ">
            <input class="form-control" type="text" name="username" autocomplete="off" placeholder="Benutzername" required>
          </div>
          <div class="form-group fg2">
            <input class="form-control" type="password" name="password" autocomplete="off" placeholder="Passwort" required>
          </div>
          <input class="btn btn-lg m4u_color" type="submit" value="Anmelden">
        </form>
      </div>
      <script src="jQuery/jquery.min.js"></script>
  		<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
