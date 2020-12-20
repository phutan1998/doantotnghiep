<meta charset="utf-8">
 <?php 
   $mysqli = new mysqli("localhost", "root", "", "DoAn");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
  ?>