<!DOCTYPE html>
<html>
<head>
  <title>OWCA - Login</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="https://use.typekit.net/ezb4wpg.css">
</head>
<body class="login">
  <div class="login-container">
    <form method="POST" action="login.php">
      <div>
        <label for="username" class="login">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username">
      </div>
      <div>
        <label for="password" class="login">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
      <button type="submit" class="login-button">Login</button>
    </form>
    <!-- Hint: What happens when you put ' OR 1=1 in the username field? -->
    <div class="login-hint">Hint: The database query might not be sanitizing inputs correctly.</div>
  </div>
  <div class="login-background"></div>
    <div class="triangle" id="triangle-1"></div>
    <div class="triangle" id="triangle-2"></div>
    <div class="triangle" id="triangle-3"></div>
    <div class="triangle" id="triangle-4"></div>
    <div class="triangle" id="triangle-5"></div>
    <div class="triangle" id="triangle-6"></div>
    <div class="triangle" id="triangle-7"></div>
    <div class="triangle" id="triangle-8"></div>
    <div class="triangle" id="triangle-9"></div>
    <div class="triangle" id="triangle-10"></div>
    <div class="triangle" id="triangle-11"></div>

</body>
  <script src="scripts/triangle.js"></script>

  <!-- Hint: I'd also recommend checking the address bar, could help you out... -->
</html>


