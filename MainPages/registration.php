<?php
session_start(); 
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];

	$db_name = "mlady_koder";

	$sname = "localhost";
	$unmae = "root";
	$password_db = ""; 
	$db_name = "mlady_koder";

	if (empty($name) || empty($mail) || empty($password)) {
		header("Location: index.php?error=Zadajte všetky údaje");
		exit();
	}
	
	$conn = mysqli_connect($sname, $unmae, $password_db, $db_name);

	if (!$conn) {
		echo "Connection failed!";
	} else {
		// Príkaz pre pridanie do tabuľky "registration"
		$stmt_registration = $conn->prepare("INSERT INTO registration (name, mail, password) VALUES (?, ?, ?)");
		$stmt_registration->bind_param("sss", $name, $mail, $password);
		$execval_registration = $stmt_registration->execute();

		// Získame ID posledného vloženého záznamu v tabuľke "registration"
		$last_inserted_id = $conn->insert_id;

		// Príkaz pre pridanie do tabuľky "users" s rovnakým ID ako v tabuľke "registration"
		$stmt_users = $conn->prepare("INSERT INTO users (id, name, mail, password) VALUES (?, ?, ?, ?)");
		$stmt_users->bind_param("isss", $last_inserted_id, $name, $mail, $password);
		$execval_users = $stmt_users->execute();

		$_SESSION['name'] = $name;
		$_SESSION['mail'] = $mail;
		$_SESSION['id'] = $last_inserted_id;

		if ($execval_registration && $execval_users) {
			header("Location: ../LoggedPages/index.php");
		        exit();
		} else {
			echo "Error during registration: " . $conn->error;
		}

		$stmt_registration->close();
		$stmt_users->close();
		$conn->close();
	}

?>
