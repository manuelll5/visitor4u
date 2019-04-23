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
    <?php include "navbar.php"; ?>
  </header>
  <body>
    <?php include "employee/headlineAddEmployee.php"; ?>
    <?php include "employee/addEmployee.php"; ?>
    <?php include "employee/manageEmployee.php"; ?>
  </body>
</html>
