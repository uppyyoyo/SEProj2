<?php
include 'connect.php';
$roomNum=$_POST["roomNum"];
$roomP=$_POST["room_p"];
$waterU=$_POST["waterU"];
$date=$_POST["date"];
$elecU=$_POST["elecU"];
$extra=$_POST["extra"];
$lelecU= $conn->query("SELECT electric_unit FROM billing WHERE MONTH(date) = MONTH(CURDATE())-1 AND billing.room = $roomNum");
$lwaterU= $conn->query("SELECT water_unit FROM billing WHERE MONTH(date) = MONTH(CURDATE())-1 AND billing.room = $roomNum");
$e = $lelecU->fetch_assoc();
$w = $lwaterU->fetch_assoc();
$ee = $e["electric_unit"];
$ww = $w["water_unit"];
if (!$e || !$w) {
    die('Could not query:' . mysql_error());
}
$pelec = ($elecU - $ee) * 7;
$pwater = ($waterU - $ww) * 18;
$total = $roomP + $pelec + $pwater + $extra;
$insert = $conn->query("INSERT INTO billing (room, date, room_price, electric_unit,electric,water_unit, water, extra,total, paid) 
			VALUES ('$roomNum', '$date', '$roomP', '$elecU','$pelec', '$waterU','$pwater', '$extra','$total', 'No')");
?>
<html>
	<head>
		<script>
			function myFunc() {
				<?php
				if($insert){ ?>
    				alert("Add Complete");
				<?php
				}
				else{?>
					alert("Add Fail");
				<?php
				}?>
				window.location="addpayment.php";
			}
		</script>
	</head>
	<body>
		<?php
			echo '<script> myFunc() </script>';
		?>
	</body>
</html>