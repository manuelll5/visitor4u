<!DOCTYPE html>
<?php // NOTE: Wenn scrollbar aktive, sidebar zu breit und zu kurz ?>
<?php // NOTE: Table2 Rechte wie z.b reqiured ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mediaControl.css">
    <?php // NOTE: "js/employee.js" Aus zeitlichen Gründen nicht möglich gewesen!?>
    <!-- <script src="js/employee.js"></script> -->
    <title>Visitor4U - Mitarbeiter/innen</title>
  </head>
  <header>
    <?php
      include "navbar.php";
      ?>
  </header>
  <body>
    <?php // TODO: form auslagern!!! bzw. table ?>
    <!-- Beginn table Mitarbeiter hinzufügen -->
    <table class="tableAll">
      <tr>
        <th class="heading1">
          <span>Mitarbeiter/innen hinzufügen</span>
        </th>
        <th>
          <?php // NOTE: "js/employee.js" Button aus zeitlichen Gründen ohne funktion! ?>
          <button class="plus" type="button" value="" id="addrow"></button>
        </th>
      </tr>
    <!-- Ende Mitarbeiter hinzufügen -->
    </table>
<!-------------------------------------------------------------------------------------->
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
<!-------------------------------------------------------------------------------------->
      <!-- Beginn table Mitarbeiter verwalten -->
      <table class="table2 tableAll border">
        <!-- Beginn thead Mitarbeiter verwalten -->
        <thead>
          <tr>
            <th class="heading2 colorLightGray border" colspan="4">
              <span>Mitarbeiter/innen verwalten</span>
            </th>
          </tr>
        <!-- Ende thead Mitarbeiter verwalten -->
        </thead>
        <!-- Beginn tbody Mitarbeiter verwalten -->
        <tbody>
          <tr class="nthEmployee">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="email" name="username" placeholder="EMail" autocomplete="off" disabled></td>
            <td><button class="edit" type="button" value=""></button></td>
          </tr>
          <tr class="nthEmployee">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
            <td><button class="delete" type="button" value=""></button></td>
          </tr>
          <tr class="nthEmployee">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="email" name="username" placeholder="EMail" autocomplete="off" disabled></td>
            <td><button class="edit" type="button" value=""></button></td>
          </tr>
          <tr class="nthEmployee">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
            <td><button class="delete" type="button" value=""></button></td>
          </tr>
          <tr class="nthEmployee">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="email" name="username" placeholder="EMail" autocomplete="off" disabled></td>
            <td><button class="edit" type="button" value=""></button></td>
          </tr>
          <tr class="nthEmployee">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
            <td><button class="delete" type="button" value=""></button></td>
          </tr>
          <tr class="nthEmployee">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="email" name="username" placeholder="EMail" autocomplete="off" disabled></td>
            <td><button class="edit" type="button" value=""></button></td>
          </tr>
          <tr class="nthEmployee">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
            <td><button class="delete" type="button" value=""></button></td>
          </tr>
        <!-- Ende tbody Mitarbeiter verwalten -->
        </tbody>
      <!-- Ende table Mitarbeiter verwalten -->
      </table>
  </body>
</html>
