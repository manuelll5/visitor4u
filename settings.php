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
    <!-- Beninn form -->
    <form action="processing.php" method="post">
      <!-- Beginn table Überschrift -->
      <table class="settingsGrungeinstellung tableAll">
        <tr>
          <th>
              <span>Grundeinstellungen</span>
          </th>
        </tr>
      </table>
      <!-- Ende table Überschrift -->
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
        <tr class="nthSettings"><th class="border col" colspan='4' style="height:56px;">Einstellungen</th></tr>
        <tr class="nthSettings">
          <td>Max. Terminal</td>
          <td><input class="border colorDarkGray" type="text" name="set_max_terminal" autocomplete="off" value="5" disabled></td>
          <td>Ben. Terminal</td>
          <td><input class="border colorDarkGray" type="text" name="set_terminal" autocomplete="off" value="2" disabled></td>
        </tr>
        <tr class="nthSettings">
          <td>Schriftfarbe</td>
          <td><input class="border colorBlueText" type="text" name="street" autocomplete="off" value="#FFFFFF"></td>
          <td>Hintergrundfarbe</td>
          <td><input class="border colorBlue" type="text" name="street" autocomplete="off" value="#2b78e4"></td>
        </tr>
        <tr class="nthSettings">
          <td>Link zur Daten...</td>
          <td><input class="border" type="text" name="street" autocomplete="off" value="https://www.google.de"></td>
          <td>Logo</td>
          <td><input class="border" type="text" name="street" autocomplete="off" value="Neues Logo hochladen"></td>
        </tr>
      </table>
      <!-- Ende table Grundeinstellungen -->
      <!-- Beginn Überschrift Drag & Drop -->
      <table class="tableAll">
        <tr>
          <th>
              <span>Einstellungen für den Besucherlogin - Welche Daten sind erforderlich?</span>
              <br>
              <span>Dies ist ein Drag & Drop Bereich.</span>
          </th>
        </tr>
      </table>
      <!-- Ende Überschrift Drag & Drop -->
      <!-- Beginn Drag & Drop -->
      <table>

      </table>
      <!-- Ende Drag & Drop -->
    </form>
    <!-- Ende form -->
  </body>
</html>
