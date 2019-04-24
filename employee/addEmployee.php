<!-- Beginn form -->
<form action="processing.php" method="post">
  <!-- Beginn table Mitarbeiter hinzufügen -->
  <table id="displayNone" style="display:none;" class="border table2 tableAll">
    <tr>
      <td><input class="border" type="text" name="firstname" placeholder="Vorname" autocomplete="off" required></td>
      <td><input class="border" type="text" name="lastname" placeholder="Nachname" autocomplete="off" required></td>
      <td><input class="border" type="email" name="email" placeholder="EMail" autocomplete="off" required></td>
    </tr>
    <tr>
      <td><input class="border" type="text" name="department" placeholder="Abteilung" autocomplete="off" required></td>
      <td><input class="border" type="text" name="roomNo" placeholder="Zimmer-Nr." autocomplete="off" required></td>
      <td><input class="border" type="text" name="phoneNo" placeholder="Telefon-Nr." autocomplete="off" required></td>
    </tr>
    <tr>
      <td colspan="3"><input class="btn colorBlue border s_button" type="submit" value="Speichern"></td>
    </tr>
    <!-- Ende table Mitarbeiter hinzufügen -->
  </table>
<!-- Ende form -->
</form>
