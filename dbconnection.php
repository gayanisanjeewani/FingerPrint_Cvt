<?php
$dbhostname='localhost:3306';
$dbusername='unitecso_unitec';
$dbpassword='unitec_1234';
$dbname='unitecso_msi';

$con=mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname);
if(!$con)
{
	die("Connection failed".mysqli_error);
}
?>

<?php
// $dbhostname='localhost';
// $dbusername='root';
// $dbpassword='';
// $dbname='center_registration';

// $con=mysqli_connect($dbhostname,$dbusername,$dbpassword,$dbname);
// if(!$con)
// {
	// die("Connection failed".mysqli_error);
// }
?>
