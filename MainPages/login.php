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

$conn = mysqli_connect($sname, $unmae, $password_db, $db_name);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['mail']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $mail = validate($_POST['mail']);
    $password = validate($_POST['password']);

    if (empty($mail)) {
        header("Location: index.php?error=Zadajte e-mail");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Zadajte heslo");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE mail='$mail' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['mail'] === $mail && $row['password'] === $password) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['mail'] = $row['mail'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../LoggedPages/index.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect User name or password");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
    }
    
} else {
    header("Location: index.php");
    exit();
}