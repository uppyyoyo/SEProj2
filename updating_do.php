<?php
$db = 'test';
 $host = "localhost";
 $username = "root@localhost";
 $password = "";
  try{
     $connection = new mysqli($host,$username,$password,$db);
 }
 catch(Exception $e){
     die('failed');
 }
 $roomNum=$_POST["room"];
 $roomp=$_POST["room_price"];
 $waterU=$_POST["water_unit"];
 $elecU=$_POST["electric_unit"];
 $extra=$_POST["extra"];
 $lelecU= $connection->query("SELECT electric_unit FROM billing WHERE MONTH(date) = MONTH(CURDATE())-1 AND billing.room = $roomNum");
 $lwaterU= $connection->query("SELECT water_unit FROM billing WHERE MONTH(date) = MONTH(CURDATE())-1 AND billing.room = $roomNum");
 $e = $lelecU->fetch_assoc();
 $w = $lwaterU->fetch_assoc();
 $ee = $e["electric_unit"];
 $ww = $w["water_unit"];
 if (!$e || !$w) {
     die('Could not query:' . mysql_error());
 }
 $pelec = ($elecU - $ee) * 7;
 $pwater = ($waterU - $ww) * 18;
 $total = $roomp + $pelec + $pwater + $extra;
 
 

$q  = $connection->query("UPDATE billing SET room_price=$roomp,water_unit=$waterU,electric_unit=$elecU,
    water=$pwater,electric=$pelec,extra=$extra,total=$total WHERE id = '".$_POST["id"]."'");
?>
 <html>
	<head>
		<script>
			function myFunc() {
				<?php
				if($q){ ?>
    				alert("Edit Complete");
				<?php
				}
				else{?>
					alert("Edit Fail");
				<?php
				}?>
				window.location="maintainence.php";
			}
		</script>
	</head>
	<body>
		<?php
			echo '<script> myFunc() </script>';
		?>
	</body>
</html>