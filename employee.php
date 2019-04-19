<!DOCTYPE html>
<?php // NOTE: scrollbar nur bei bedarf!!!! ?>
<?php // NOTE: Mitarbeiter hinzufügen in center ?>
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
    <form action="processing.php" method="post">
      <table class="tableAll">
        <tr>
          <th>
            <?php // TODO: span nicht im center ?>
            <span>Mitarbeiter/innen hinzufügen</span>
            <button class="plus" type="button" value="" id="addrow"></button>
          </th>
        </tr>
      </table>
        <?php // TODO: style="display:none;" id="row" ?>
      <table class="table2 tableAll border">
        <tr>
          <td><input class="inputEmployee border" type="text" name="firstname" placeholder="Vorname" autocomplete="off" required></td>
          <td><input class="inputEmployee border" type="text" name="lastname" placeholder="Nachname" autocomplete="off" required></td>
          <td><input class="inputEmployee border" type="email" name="username" placeholder="EMail" autocomplete="off" required></td>
        </tr>
        <tr>
          <td><input class="inputEmployee border" type="text" name="firstname" placeholder="Abteilung" autocomplete="off" required></td>
          <td><input class="inputEmployee border" type="text" name="lastname" placeholder="Zimmer-Nr." autocomplete="off" required></td>
          <td><input class="inputEmployee border" type="text" name="username" placeholder="Telefon-Nr." autocomplete="off" required></td>
        </tr>
      </table>
      <div style="text-align:center;">
          <input class="btn color" type="submit" value="Speichern">
      </div>
    </form>
    <table class="tableAll border">
      <tr>
        <th class="border"colspan="4">
          <span>Mitarbeiter/innen Verwalten</span>
        </th>
      </tr>
      <tr>
        <td><input class="inputEmployee border" type="text" name="firstname" placeholder="Vorname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="lastname" placeholder="Nachname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
        <td><button class="cross" type="button" value="" id="addrow"></button></td>
      </tr>
      <tr>
        <td><input class="inputEmployee border" type="text" name="firstname" placeholder="Vorname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="lastname" placeholder="Nachname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
      </tr>
      <tr>
        <td><input class="inputEmployee border" type="text" name="firstname" placeholder="Vorname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="lastname" placeholder="Nachname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
      </tr>
      <tr>
        <td><input class="inputEmployee border" type="text" name="firstname" placeholder="Vorname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="lastname" placeholder="Nachname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
      </tr>
      <tr>
        <td><input class="inputEmployee border" type="text" name="firstname" placeholder="Vorname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="lastname" placeholder="Nachname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
      </tr>
      <tr>
        <td><input class="inputEmployee border" type="text" name="firstname" placeholder="Vorname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="lastname" placeholder="Nachname" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
        <td><input class="inputEmployee border" type="text" name="username" placeholder="EMail" autocomplete="off"></td>
      </tr>

    </table>
  </body>
</html>
