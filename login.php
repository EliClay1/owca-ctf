<?php
session_start();
// establishing a connection to the SQL Database.-
$conn = new mysqli("localhost", "root", "", "ctf_db");

// if the connection fails, kill the server.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get raw unsanitized inputs
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$query = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";

try {
  $result = $conn->query($query);
} catch (mysqli_sql_exception $e) {
  header("Location: index.php?error=maybe_try_a_hashtag_");
    exit;
}

if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    
    if (!empty($user['flag_part1'])) {
        $_SESSION['flag_part1'] = $user['flag_part1'];
    }
    
    header("Location: owca_navigator.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
$conn->close();
?>
