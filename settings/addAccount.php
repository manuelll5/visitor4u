<table class="tableAll">
  <tr>
    <th>
        <span>Login-Account für die Administatoren, Besuchermanager und Terminal's.</span>
    </th>
    <th>
      <?php // NOTE: "js/employee.js" Button aus zeitlichen Gründen ohne funktion! ?>
      <button class="plus" type="button" onclick="test()"></button>
    </th>
  </tr>
<!-- Ende table Überschrift Logins -->
</table>

<form action='processing.php' method='post'>
	<table class="tableAll table2" style="display:none;" id="id">
    <tr>
			<td colspan='5'>
				<select class='border' required>
					<option value='' disabled selected>Benutzer</option>
					<option>Admin</option>
					<option>Mitarbeiter</option>
					<option>Terminal</option>
				</select>
				<input type='hidden' id='benutzer'>
			</td>
		</tr>
  </table>
  <table class="border tableAll table2">
    <tr  id='admin_employee' style="display: none;">
			<td><input class='border' type='text' name='firstname' placeholder='Vorname' autocomplete='off' disabled></td>
			<td><input class='border' type='text' name='lastname' placeholder='Nachname' autocomplete='off' disabled></td>
			<td><input class='border' type='text' name='username' placeholder='Benutzername' autocomplete='off' disabled></td>
		</tr>
		<tr id='admin_employee2' style="display: none;">
			<input type='hidden' id='type' name='type'>
			<td><input class='border' type='password' id='pw1.1' name='password' placeholder='Passwort' autocomplete='off' disabled></td>
			<td><input class='border' type='password' id='pw1.2' name='password2' placeholder='Passwort bestätigen' autocomplete='off' disabled></td>
			<td><input type='submit' id='submit' name='submitAdmin_employee' class='border btn colorBlue' value='Speichern'></td>
		</tr>
		<tr id='terminal' style="display: none;">
			<td style='width: 20%;'><input class='border' type='text' name='terminal_name' placeholder='Name des Terminals' autocomplete='off' disabled></td>
			<td style='width: 20%;'><input class='border' type='text' name='username' placeholder='Benutzername' autocomplete='off' disabled></td>
			<td style='width: 20%;'><input class='border' id='pw2.1' type='password' name='password' placeholder='Passwort' autocomplete='off' disabled></td>
			<td style='width: 20%;'><input class='border' id='pw2.2' type='password' name='password2' placeholder='Passwort bestätigen' autocomplete='off' disabled></td>
      <td style='width: 20%;'><input type='submit' id='submit2' name='submitTerminal' class='border btn colorBlue' value='Speichern'></td>
 		</tr>
	</table>
</form>
<script>
  function test() {
    document.getElementById('id').style.display ="";
  }
</script>
