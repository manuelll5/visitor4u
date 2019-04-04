<?php
include "connect.php";

$sql = "SELECT * FROM company";
// ----------------------------------------------------
$company = $pdo->query($sql)->fetch();

echo $company['companyName'];
// ----------------------------------------------------
// foreach ($pdo->query($sql) as $row) {
//   echo $row['companyName']." ".$row['street']."<br />";
//   echo "Stadt: ".$row['city']."<br /><br />";
// }
?>
