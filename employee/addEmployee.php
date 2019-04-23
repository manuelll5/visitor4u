<?php // NOTE:" js/employee.js" style="display:none;" id="row" ?>
<?php // TODO: bei allen input felder "name" anpassen! ?>
<!-- Beginn form -->
<form action="processing.php" method="post">
  <!-- Beginn table Mitarbeiter hinzufügen -->
  <table class="table2 tableAll border">
    <tr>
      <td><input class="border" type="text" name="firstname" placeholder="Vorname" autocomplete="off" required></td>
      <td><input class="border" type="text" name="lastname" placeholder="Nachname" autocomplete="off" required></td>
      <td><input class="border" type="email" name="username" placeholder="EMail" autocomplete="off" required></td>
    </tr>
    <tr>
      <td><input class="border" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" required></td>
      <td><input class="border" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" required></td>
      <td><input class="border" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" required></td>
    </tr>
  <!-- Ende table Mitarbeiter hinzufügen -->
  </table>
  <!-- Beginn button Speichern -->
  <div style="text-align:center;">
      <input class="btn colorBlue border s_button" type="submit" value="Speichern">
  <!-- Ende button Speichern -->
  </div>
<!-- Ende form -->
</form>
