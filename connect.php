<?php
$conn_string ="host=ec2-3-216-129-140.compute-1.amazonaws.com port=5432 database=d3v0o1fi2hlh5m user=eygrieigcqcpfl Password=05003a499b77f8471f36377c85308dd6605a860b6593d7ef424f794a1df31c84";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$password = $_POST['pass'];
}

$sql = "SELECT * FROM tblaccount WHERE _user=".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row =pg_num_rows($result);

if ($row==1) {
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
