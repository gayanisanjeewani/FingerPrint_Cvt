
<?php
 $dbhostname='localhost';
 $dbusername='root';
 $dbpassword='';
 $dbname='center_registration';

 $con=mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname);
 if(!$con)
 {
	 die("Connection failed".mysqli_error);
 }
?>
