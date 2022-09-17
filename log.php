<?php
	include "db.php";
	ob_start();
	session_start();
	if (isset($_POST['log'])) {
		$num  = $_POST['secnum'];
		$pass = $_POST['pass'];
		$hash = sha1($pass);

		$query = "SELECT userid,pass FROM login";
		$selectTea = mysqli_query($connection, $query);
		if (!$selectTea) {
				echo "Login okk";
			}
		else{
			while ($row = mysqli_fetch_array($selectTea) ) {
			
			$_SESSION['userid'] 		= $row['userid'];
			$_SESSION['pass'] 			= $row['pass'];

			}
			if ( $_SESSION['userid'] !== $num || $_SESSION['pass'] !== $hash){
				echo "Login faild";
			}
			else if ( $_SESSION['userid'] == $num && $_SESSION['pass'] == $hash){
				header("Location: list.php");
			}
			else{
				header("Location: index.php");
			}
		}
	}
?>
