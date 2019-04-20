<!DOCTYPE html>
<?php // NOTE: Wenn scrollbar aktive, sidebar zu breit und zu kurz ?>
<?php // NOTE: Table2 Rechte wie z.b reqiured ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mediaControl.css">
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
    <!-- Beginn form -->
    <form action="processing.php" method="post">
      <!-- Beginn table Mitarbeiter hinzufügen -->
      <table class="tableAll">
        <tr>
          <th class="employeeAdd">
            <span>Mitarbeiter/innen hinzufügen</span>
          </th>
          <th>
            <button class="plus" type="button" value="" id="addrow"></button>
          </th>
        </tr>
      </table>
      <!-- Ende Mitarbeiter hinzufügen -->
      <?php // TODO: style="display:none;" id="row" ?>
      <?php // TODO: bei allen input felder "name" anpassen! ?>
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
      </table>
      <!-- Ende table Mitarbeiter hinzufügen -->
      <!-- Beginn button Speichern -->
      <div style="text-align:center;">
          <input class="btn colorBlue border" type="submit" value="Speichern">
      </div>
      <!-- Ende button Speichern -->
      <!-- Beginn table Mitarbeiter verwalten -->
      <table class="table2 tableAll border">
        <!-- Beginn thead Mitarbeiter verwalten -->
        <thead>
          <tr>
            <th class="employeeManage colorLightGray border" colspan="4">
              <span>Mitarbeiter/innen verwalten</span>
            </th>
          </tr>
        </thead>
        <!-- Ende thead Mitarbeiter verwalten -->
        <!-- Beginn tbody Mitarbeiter verwalten -->
        <tbody>
          <tr class="nth">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="email" name="username" placeholder="EMail" autocomplete="off" disabled></td>
            <td><button class="edit" type="button" value=""></button></td>
          </tr>
          <tr class="nth">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
            <td><button class="delete" type="button" value=""></button></td>
          </tr>
          <tr class="nth">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="email" name="username" placeholder="EMail" autocomplete="off" disabled></td>
            <td><button class="edit" type="button" value=""></button></td>
          </tr>
          <tr class="nth">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
            <td><button class="delete" type="button" value=""></button></td>
          </tr>
          <tr class="nth">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="email" name="username" placeholder="EMail" autocomplete="off" disabled></td>
            <td><button class="edit" type="button" value=""></button></td>
          </tr>
          <tr class="nth">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
            <td><button class="delete" type="button" value=""></button></td>
          </tr>
          <tr class="nth">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Vorname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Nachname" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="email" name="username" placeholder="EMail" autocomplete="off" disabled></td>
            <td><button class="edit" type="button" value=""></button></td>
          </tr>
          <tr class="nth">
            <td><input class="border colorDarkGray" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" disabled></td>
            <td><input class="border colorDarkGray" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" disabled></td>
            <td><button class="delete" type="button" value=""></button></td>
          </tr>
        </tbody>
        <!-- Ende tbody Mitarbeiter verwalten -->
      </table>
      <!-- Ende table Mitarbeiter verwalten -->
    </form>
    <!-- Ende form -->
  </body>
</html>
