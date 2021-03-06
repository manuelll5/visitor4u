<?php
  session_start();
  // TODO: get erstetzen
  if(!isset($_SESSION["username"]) and !isset($_GET["page"])) {
    //Für Erstellung vom Anmeldeformular
    $return = 0;
  }
  if($_GET["page"] == "log") {
    //Daten von Post nehmen und speichern

    include "connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    // TODO: Join Infos erarbeiten
    $sql = "SELECT user.username, user.password, user.privileges, user.lastname, company.companyName, settings.set_color, settings.set_bg_color, company.idCompany
      FROM user
      RIGHT JOIN company
      ON
      user.company_idCompany = company.idCompany
      LEFT JOIN settings
      ON
      settings.company_idCompany = company.idCompany
      WHERE user.username='" . $username . "' ";

    // $sql = "SELECT * FROM user";

    $result = $pdo->query($sql)->fetch();
    // TODO: Passwort in datenbank noch hashen und härten!!!
    $password = hash("sha256", $password);

    if($username == $result['username'] and $password == $result['password']) {
      $_SESSION['username'] = $username;
      $privileges = $result['privileges'];
      $_SESSION['privileges'] = $privileges;
      $_SESSION['company'] = $result['companyName'];
      $_SESSION['idCompany'] = $result['idCompany'];
      $_SESSION['lastname'] = $result['lastname'];
      $_SESSION['color'] = $result['set_color'];
      $_SESSION['bg_color'] = $result['set_bg_color'];

      //Return basierend auf den rechten
      if($privileges == 0) {
        $return = 2;
      } else if($privileges == 1) {
        $return = 3;
      } else if($privileges == 2) {
        $return = 4;
      }
      // TODO: Üerprüfen ob benötigt
    } else {
      $return = 1;
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Visitor4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/mediaControl.css">
    <?php
			//Wenn login erfolgreich weiterleitung auf entsprechende Seite
			if($return == 2) {
				echo "<meta http-equiv='refresh' content='0; URL=navbar.php'>";
			} else if($return == 3) {
				echo "<meta http-equiv='refresh' content='0; URL=test.php'>";
			} else if($return == 4) {
				echo "<meta http-equiv='refresh' content='0; URL=terminal/terminal.php'>";
			}
		?>
  </head>
  <body>
    <?php
      //Wenn neu auf der Seite oder login fehlschlägt
      if($return == 0 || $return == 1) {
    ?>
      <div class="center1">
        <img src="logo/visitor4u.png" alt="V4U-Logo" class="m4u_logo">
        <form action="index.php?page=log" method="post">
            <input class="fg1 border" type="text" name="username" autocomplete="off" placeholder="Benutzername" required>
            <input class="fg2 border" type="password" name="password" autocomplete="off" placeholder="Passwort" required>
            <input class="btn m4u_color border i_button" type="submit" value="Anmelden">
        </form>
      </div>
      <!-- <script src="jQuery/jquery.min.js"></script>
  		<script src="bootstrap/js/bootstrap.min.js"></script> -->
      <?php
        }
        //Wenn login fehlschlägt
        if($return == 1) {
      ?>
          <script>alert("Benutzerdaten nicht korrekt.");</script>
      <?php
        }
        // mysqli_close($pdo);
      ?>
  </body>
</html>
