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

<!----------------------------------------------------------------------------------------------------------->

      <!-- Beginn table Überschrift -->
      <table class="settingsGrungeinstellung tableAll">
        <tr>
          <th>
              <span>Grundeinstellungen</span>
          </th>
        </tr>
      </table>
      <!-- Ende table Überschrift -->

<!----------------------------------------------------------------------------------------------------------->

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
        <tr class="nthSettings"><th colspan='4' style="height:56px;">Einstellungen</th></tr>
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

<!----------------------------------------------------------------------------------------------------------->

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
      <table class="tableAll border colorLightGray">
        <!-- Beginn thead Drag & Drop -->
        <!-- Ende thead Drag & Drop -->
        <!-- Beginn tbody Drag & Drop -->
          <tr>
            <td>Erforderlich - Reihenfolge</td>
            <td>Nicht Erforderlich</td>
          </tr>
        <!-- Ende tbody Drag & Drop -->
      </table>
      <!-- Ende Überschrift Drag & Drop -->

<!----------------------------------------------------------------------------------------------------------->
<?php
echo "<table class='table table-striped table-bordered' id='tableSortable' style='text-align: center; margin: 50px 0 0 0;'><thead>";
echo 	"	<tr>
        <th colspan='2'><span style='font-size: 33px;'>Einstellungen für den Besucherlogin</span></th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>Aktiv - Reihenfolge</td>
      <td>Inaktiv</td>
    </tr>
    <tr>
      <td style='width: 50%'>
        <ul id='sortable1' class='connectedSortable'>";
        foreach($result3_active as $green) {
          echo "<li onmouseup='end();' class='ui-state-default greenLi'>" . $green . "</li>";
        }

        echo "</ul></td><td style='width: 50%;'><ul id='sortable2' class='connectedSortable'>";
        foreach($result3_inactive as $red) {
          echo "<li onmouseup='end();' class='ui-state-default redLi'>" . $red . "</li>";
        }

        //Sofort die bereits eingetragenen Eintragen im hidden input
        $i = 0;
        foreach($result3_active as $green) {
          if($i++ == 0) {
            $allGreen = $green;
          } else {
            $allGreen .= ";" . $green;
          }
        }
echo "	</td>
      <input type='hidden' value='" . $allGreen . "' name='activeOrder' id='activeOrder'>
    </tr>
  </tbody>
</table>";
?>
<!----------------------------------------------------------------------------------------------------------->
    </form>
    <!-- Ende form -->
  </body>
</html>
