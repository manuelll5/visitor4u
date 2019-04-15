<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/visitorList.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/textareaAndBtnBorderInColor.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/visitor4uList.js"></script>
    <title>Visitor4U - Besucherliste</title>
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
          <span class="mitarbeiterHinzufügen">Mitarbeiter/innen hinzufügen</span>
          <button class="plus" type="button" value="" id="addrow"></button>
        </thead>
        <tbody id="row" style="display:none;">
          <tr>
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="username" placeholder="EMail" autocomplete="off" disabled></td>
          </tr>
          <tr>
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
