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
    <form action="processing.php" method="post">
      <table class="settingsGrungeinstellung tableAll">
        <tr>
          <th>
              <span>Grundeinstellungen</span>
          </th>
        </tr>
      </table>
      <table class="table2 tableAll border">
        <tr>
          <td>Straße</td>
          <td><input class="border" type="text" name="street" autocomplete="off" value="Musterstaße"></td>
          <td>Hausnummer</td>
          <td><input class="border" type="text" name="number" autocomplete="off" value="25a"></td>
        </tr>
        <tr>
          <td>PLZ</td>
          <td><input class="border" type="text" name="postcode" autocomplete="off" value="76189"></td>
          <td>Ort</td>
          <td><input class="border" type="text" name="city" autocomplete="off" value="Karlsruhe"></td>
        </tr>
        <tr><th class="border" colspan='4' style="height:56px;">Einstellungen</th></tr>
        <tr>
          <td>Max. Terminal</td>
          <td><input class="border colorDarkGray" type="text" name="set_max_terminal" autocomplete="off" value="5" disabled></td>
          <td>Ben. Terminal</td>
          <td><input class="border colorDarkGray" type="text" name="set_terminal" autocomplete="off" value="2" disabled></td>
        </tr>
        <tr>
          <td>Schriftfarbe</td>
          <td><input class="border colorBlueText" type="text" name="street" autocomplete="off" value="#FFFFFF"></td>
          <td>Hintergrundfarbe</td>
          <td><input class="border colorBlue" type="text" name="street" autocomplete="off" value="#2b78e4"></td>
        </tr>
        <!-- <tr>
          <td>Straße</td>
          <td><input class="" type="text" name="street" autocomplete="off" value="test"></td>
          <td>Hausnummer</td>
          <td><input class="" type="text" name="street" autocomplete="off" value="test"></td>
        </tr> -->
        <!-- <tr>
          <td>Straße</td>
          <td><input class="" type="text" name="street" autocomplete="off" value="test"></td>
          <td>Hausnummer</td>
          <td><input class="" type="text" name="street" autocomplete="off" value="test"></td>
        </tr> -->
        <!-- <tr>
          <td>Straße</td>
          <td><input class="" type="text" name="street" autocomplete="off" value="test"></td>
          <td>Hausnummer</td>
          <td><input class="" type="text" name="street" autocomplete="off" value="test"></td>
        </tr> -->
      </table>
    </form>
  </body>
</html>
