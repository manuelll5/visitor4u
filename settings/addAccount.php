<form action='processing.php' method='post'>
	<table class="tableAll table2" style="display:none;" id="displayNone">
    <tr>
			<td colspan='5'>
				<select class='border' id='benutzer_dropdown' required>
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
    <tr  id='admin_employee1' style="display: none;">
      <input type='hidden' id='type' name='type'>
			<td><input class='border' type='text' name='firstname' placeholder='Vorname' autocomplete='off'></td>
			<td><input class='border' type='text' name='lastname' placeholder='Nachname' autocomplete='off'></td>
			<td><input class='border' type='text' name='username' placeholder='Benutzername' autocomplete='off'></td>
		</tr>
		<tr id='admin_employee2' style="display: none;">
			<input type='hidden' id='type' name='type'>
      <?php // TODO: pw und submit noch ohne funktion ?>
			<td><input class='border' type='password' id='pw1.1' name='password' placeholder='Passwort' autocomplete='off'></td>
			<td><input class='border' type='password' id='pw1.2' name='password2' placeholder='Passwort bestätigen' autocomplete='off'></td>
			<td><input type='submit' id='submit' name='submitAdmin_employee' class='border btn colorBlue' value='Speichern'></td>
		</tr>
		<tr id='terminal' style="display: none;">
      <?php // TODO: pw und submit noch ohne funktion ?>
			<td style='width: 20%;'><input class='border' type='text' name='terminal_name' placeholder='Name des Terminals' autocomplete='off'></td>
			<td style='width: 20%;'><input class='border' type='text' name='username' placeholder='Benutzername' autocomplete='off'></td>
			<td style='width: 20%;'><input class='border' id='pw2.1' type='password' name='password' placeholder='Passwort' autocomplete='off'></td>
			<td style='width: 20%;'><input class='border' id='pw2.2' type='password' name='password2' placeholder='Passwort bestätigen' autocomplete='off'></td>
      <td style='width: 20%;'><input type='submit' id='submit2' name='submitTerminal' class='border btn colorBlue' value='Speichern'></td>
 		</tr>
	</table>
</form>
