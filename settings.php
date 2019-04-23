<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mediaControl.css">
    <title>Visitor4U - Einstellungen</title>
  </head>
  <header>
    <?php
      include "navbar.php";
      ?>
  </header>
  <body>
<!-------------------------------------------------------------------------------------->
    <!-- Beginn table Überschrift Grundeinstellungen -->
    <table class="settingsGrungeinstellung tableAll">
      <tr>
        <th>
            <span>Grundeinstellungen</span>
        </th>
      </tr>
    </table>
    <!-- Ende table Überschrift Grundeinstellungen -->
<!-------------------------------------------------------------------------------------->
    <!-- Beninn form Grundeinstellungen -->
    <form action="processing.php" method="post">
      <!-- Beginn table Grundeinstellungen -->
      <table class="table2 tableAll border">
        <tr class="nthSettings">
          <td>Straße</td>
          <td><input class="border" type="text" name="street" autocomplete="off" value="Musterstaße"></td>
          <td>Hausnummer</td>
          <td><input class="border" type="text" name="number" autocomplete="off" value="25a"></td>
        </tr>
        <tr class="nthSettings">
          <td>PLZ</td>
          <td><input class="border" type="text" name="postcode" autocomplete="off" value="76189"></td>
          <td>Ort</td>
          <td><input class="border" type="text" name="city" autocomplete="off" value="Karlsruhe"></td>
        </tr>
        <!-- <tr class="nthSettings"><th colspan='4' style="height:56px;">Einstellungen</th></tr> -->
        <tr class="nthSettings">
          <td>Max. Terminal</td>
          <td><input class="border colorDarkGray" type="text" name="set_max_terminal" autocomplete="off" value="5" disabled></td>
          <td>Ben. Terminal</td>
          <td><input class="border colorDarkGray" type="text" name="set_terminal" autocomplete="off" value="2" disabled></td>
        </tr>
        <!-- <tr class="nthSettings">
          <td>Schriftfarbe</td>
          <td><input class="border colorBlueText" type="text" name="street" autocomplete="off" value="#FFFFFF"></td>
          <td>Hintergrundfarbe</td>
          <td><input class="border colorBlue" type="text" name="street" autocomplete="off" value="#2b78e4"></td>
        </tr> -->
        <tr class="nthSettings">
          <td>Link zur Daten...</td>
          <td><input class="border" type="text" name="street" autocomplete="off" value="https://www.google.de"></td>
          <td>Logo</td>
          <td><input class="border" type="text" name="street" autocomplete="off" value="Neues Logo hochladen"></td>
        </tr>
      <!-- Ende table Grundeinstellungen -->
      </table>
    <!-- Ende form Grundeinstellungen -->
    </form>
<!-------------------------------------------------------------------------------------->
    <!-- Beginn table Überschrift Drag & Drop -->
    <table class="tableAll">
      <tr>
        <th>
            <span>Einstellungen für den Besucherlogin - Welche Daten sind erforderlich?</span>
            <br>
            <span>Dies ist ein Drag & Drop Bereich.</span>
        </th>
      </tr>
    <!-- Ende table Überschrift Drag & Drop -->
    </table>
<!-------------------------------------------------------------------------------------->
    <?php // TODO: Noch in arbeit!!! ?>
    <!-- Beginn form Drag & Drop -->
    <form action="processing.php" method="post">
      <!-- Beginn table Drag & Drop -->
      <table class="tableAll border colorLightGray">
          <tr>
            <td>Erforderlich - Reihenfolge</td>
            <td>Nicht Erforderlich</td>
          </tr>
        <!-- Ende tbody Drag & Drop -->
      </table>
      <div style="text-align:center;">
          <input class="btn colorBlue border s_button" type="submit" value="Speichern">
      </div>
    <!-- Ende form Drag & Drop -->
    </form>
<!-------------------------------------------------------------------------------------->
    <!-- Beginn table Überschrift Logins -->
    <table class="tableAll">
      <tr>
        <th>
            <!-- <span>Login-Account für die Administatoren, Besuchermanager und Terminal's.</span> -->
        </th>
        <th>
          <?php // NOTE: "js/employee.js" Button aus zeitlichen Gründen ohne funktion! ?>
          <!-- <button class="plus" type="button" value="" id="addrow"></button> -->
        </th>
      </tr>
    <!-- Ende table Überschrift Logins -->
    </table>
<!-------------------------------------------------------------------------------------->
    <!-- Beginn form Logins -->
    <!-- <form action="processing.php" method="post">
      <table class="tableAll border">
        <tr>
          <td>
            <select class="" name="">
              <option value="">Benutzer</option>
              <option>Admin</option>
              <option>Mitarbeiter</option>
              <option>Terminal</option>
            </select>
          </td>
        </tr>

        <tr id='row' style='display: none;'>
              <td colspan='5'>
                <select class='form-control company-color-border' id='benutzer_dropdown' required>
                  <option value='' disabled selected>Benutzer</option>
                  <option>Admin</option>
                  <option>Mitarbeiter</option>
                  <option>Terminal</option>
                </select>
                <input type='hidden' id='benutzer'>
              </td>
            </tr>
            <tr id='admin_employee' style='display: none;'>
              <td><input class='form-control company-color-border admin_employee_input' type='text' name='firstname' placeholder='Vorname' autocomplete='off' disabled></td>
              <td><input class='form-control company-color-border admin_employee_input' type='text' name='lastname' placeholder='Nachname' autocomplete='off' disabled></td>
              <td><input class='form-control company-color-border admin_employee_input' type='text' name='username' placeholder='Benutzername' autocomplete='off' disabled></td>
            </tr>
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
      </table>
    </form> -->
<!-------------------------------------------------------------------------------------->
<?php
  include "test1.php";
  ?>
  </body>
</html>
