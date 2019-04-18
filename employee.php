<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/employee.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/textareaAndBtnBorderInColor.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/employee.js"></script>
    <title>Visitor4U - Mitarbeiter/innen</title>
  </head>
  <header>
    <?php
      include "navbar.php";
      ?>
  </header>
  <body>
    <?php // TODO: form auslagern!!! bzw. table ?>
    <form action="processing.php" method="post">
      <table>
        <thead>
          <tr>
            <th colspan="3">
              <span class="mitarbeiterHinzufuegen">Mitarbeiter/innen hinzufügen</span>
              <button class="plus" type="button" value="" id="addrow"></button>
            </th>
          </tr>
        </thead>
        <?php // TODO: style="display:none;" ?>
        <tbody id="row">
          <tr>
            <td><input class="form-control" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="form-control" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="form-control" type="text" name="username" placeholder="EMail" autocomplete="off" disabled></td>
          </tr>
          <tr>
            <td><input class="form-control" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="form-control" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="form-control" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
          </tr>
        </tbody>
      </table>

    </form>
      <input class="btn btn-lg color visitorList_button" type="submit" value="Speichern">
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
