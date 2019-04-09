<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/visitorList.css">
    <link rel="stylesheet" href="css/button.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/textareaAndBtnBorderInColor.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <title>Visitor4U - Besucherliste</title>
  </head>
  <header>
    <?php
      include "navbar.php";
      ?>
  </header>
  <body>
    <!-- <h1 style="text-align:center;">Mitarbeiter/innen hinzufügen</h1> -->
    <form action="processing.php" method="post">
      <table class"table table-bordered table-striped" id="user" style="text-align: center; margin: 50px 0 -51px 0">
        <thead>
          <tr>
            <th colspan="4" style="width: 100%;">
              <span style="font-size: 33px; margin: 0 0 0 50px; text-align: monospace;">Mitarbeiter/innen hinzufügen</span>
              <button class="plus" value="" id="addrow"></button>
            </th>
          </tr>
        </thead>
        <tbody id="addUser">
          <tr id="row" style="display: none;">
            <td colspan="5">
              <select class="form-control company-color-border" id="benutzer_dropdown" required>
                <option value="" disabled selected>Benutzer</option>
                <option>Admin</option>
                <option>Mitarbeiter</option>
                <option>Terminal</option>
              </select>
              <input type="hidden" id="benutzer">
            </td>
          </tr>
          <tr id="admin_employee" style="display: none;">
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="form-control company-color-border admin_employee_input" type="text" name="username" placeholder="Benutzername" autocomplete="off" disabled></td>
          </tr>
          <?php // TODO: ' in " ersetzen ?>
          <tr id='admin_employee2' style='display: none;'>
            <input type='hidden' id='type' name='type'>
            <td><input class='form-control company-color-border admin_employee_input pw' type='password' id='pw1.1' name='password' placeholder='Passwort' autocomplete='off' disabled></td>
            <td><input class='form-control company-color-border admin_employee_input pw' type='password' id='pw1.2' name='password2' placeholder='Passwort bestätigen' autocomplete='off' disabled></td>
            <td><input type='submit' id='submit' name='submitAdmin_employee' class='btn company-color company-color-border' value='Speichern'></td>
          </tr>
          <tr id='terminal' style='display: none;'>
            <td style='width: 20%;'><input class='form-control company-color-border terminal_input' type='text' name='terminal_name' placeholder='Name des Terminals' autocomplete='off' disabled></td>
            <td style='width: 20%;'><input class='form-control company-color-border terminal_input' type='text' name='username' placeholder='Benutzername' autocomplete='off' disabled></td>
            <td style='width: 20%;'><input class='form-control company-color-border terminal_input pw' id='pw2.1' type='password' name='password' placeholder='Passwort' autocomplete='off' disabled></td>
            <td style='width: 20%;'><input class='form-control company-color-border terminal_input pw' id='pw2.2' type='password' name='password2' placeholder='Passwort bestätigen' autocomplete='off' disabled></td>
            <td style='width: 20%;'><input type='submit' id='submit2' name='submitTerminal' class='btn company-color company-color-border' value='Speichern'></td>
          </tr>
        </tbody>
      </table>
      </form>
  </body>
</html>
