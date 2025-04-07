<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Not logged in, redirect to login page
    header("Location: /ctf-website/index.php");
    exit;
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O.W.C.A File Navigator™</title>
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="https://use.typekit.net/ezb4wpg.css">

</head>
<body class="navigator">
  <div class="header">
    <h1>O.W.C.A File Navigator™</h1>
    <div class="search-bar">
      <input type="text" placeholder="Search">
    </div>
  </div>
  
  <div class="back-button" onclick="history.back()">
    &#8592; Back
  </div>
  
  <div class="data-corrupted">
    <a href="https://gchq.github.io/CyberChef/" class="link" target="_blank">Cooking with Cyberia: A cooking show for those in need of a clue</a>
    <br>
    <br>
    <a href="https://www.a.tools/Tool.php?Id=100" class="link" target="_blank">Steve's Image Decryption - We'll decrypt your image in 60 minutes, or it's free!</a>
  </div>
</body>
</html>
