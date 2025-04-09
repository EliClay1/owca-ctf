<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Not logged in, redirect to login page
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O.W.C.A File Navigator™</title>
  <link rel="stylesheet" href="styles/styles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://use.typekit.net/ezb4wpg.css">
</head>
<body class="navigator">
  <div class="header">
    <h1>O.W.C.A File Navigator™</h1>
    <form action="not_here.html">
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
    </form>
  </div>
  
  <div class="logout-button" onclick="window.location.href='logout.php'">
    Logout
  </div>

  <div class="folder-container">
    <a href="./private/agents.php" class="folder">
      <img src="styles/images/folder_icon.png" alt="Agents Folder">
      <span class="folder-label">agents</span>
    </a>
    
    <a href="./private/missions/missions.php" class="folder">
      <img src="styles/images/folder_icon.png" alt="Missions Folder">
      <span class="folder-label">missions</span>
    </a>

    <a href="./private/inator_designs.php" class="folder">
      <img src="styles/images/folder_icon.png" alt="Inator Designs Folder">
      <span class="folder-label">inator_designs</span>
    </a>

    <a href="./private/quarantine.php" class="folder">
      <img src="styles/images/folder_icon.png" alt="Quarantine Folder">
      <span class="folder-label">quarantine</span>
    </a>

    <a href="./private/top_secret.php" class="folder">
      <img src="styles/images/folder_icon.png" alt="Top Secret Folder">
      <span class="folder-label">TOP_SECRET</span>
    </a>

    <a href="./private/doof_backup.php" class="folder">
      <img src="styles/images/folder_icon.png" alt="Doof Backup Folder">
      <span class="folder-label">doof_backup</span>
    </a>
  </div>
</body>
</html>