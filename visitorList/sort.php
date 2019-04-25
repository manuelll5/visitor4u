<!-- <div class="">
  <ul>
    <li><a>Heute</a></li>
    <li><a>Gestern</a></li>
    <li><a>Gesamter Monat</a></li>
    <li><a>Letzter Monat</a></li>
    <li><a>Gesamtes Jahr</a></li>
    <li><a>Letztes Jahr</a></li>
    <li><a>Insgesamt</a></li>
  </ul>
</div> -->

<?php
//Pagination
			$pagination = [ 0 => "Heute", 1 => "Gestern", 2 => "Gesamter Monat", 3 => "Letzer Monat", 4 => "Gesamtes Jahr", 5 => "Letztes Jahr", 6 => "Insgesamt"];
			$paginationCheck = [ 0 => "d:0", 1 => "d:-1", 2 => "m:0", 3 => "m:-1", 4 => "y:0", 5 => "y:-1", 6 => "all"];
			$url = [ 0 => "A.visitors.php?date=d:0", 1 => "A.visitors.php?date=d:-1", 2 => "A.visitors.php?date=m:0", 3 => "A.visitors.php?date=m:-1", 4 => "A.visitors.php?date=y:0", 5 => "A.visitors.php?date=y:-1", 6 => "A.visitors.php?date=all"];
			echo "<ul style='float: left; margin: 0 10px 10px;' class='pagination'>";
			foreach($pagination as $show) {
				if($paginationCheck[$i] == $_GET["date"]) {
					echo "<li class='page-item active'><a class='page-link' href='" . $url[$i] . "'>" . $show . "</a></li>";
				} else {
					echo "<li class='page-item'><a class='page-link' href='" . $url[$i] . "'>" . $show . "</a></li>";
				}
				$i++;
			}
			echo "</ul>";
?>
