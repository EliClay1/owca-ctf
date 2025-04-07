<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Not logged in, redirect to login page
    header("Location: /ctf-website/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scrambled Logs</title>
  <link rel="stylesheet" href="../../../styles/styles.css">
  <link rel="stylesheet" href="https://use.typekit.net/ezb4wpg.css">
</head>
<body class="navigator">
  <div class="header">
    <h1>Scrambled Logs - Bannana Split (why is there another n?)</h1>
    <div class="search-bar">
      <input type="text" placeholder="Search">
    </div>
  </div>
  
  <div class="back-button" onclick="history.back()">
    &#8592; Back
  </div>

  <div>
    <img src="../../../styles/images/doof.png" alt="hidden image">
  </div>
</body>
</html>