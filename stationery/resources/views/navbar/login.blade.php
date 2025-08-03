<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Stationery Store</title>
  <link rel="stylesheet" href="css/navbar/login.css">
</head>
<body>

  <div class="login-container">
    <form class="login-form">
      <h2>Login</h2>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" required placeholder="Enter your email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" required placeholder="Enter password">
        <span class="toggle-password" onclick="togglePassword()">👁</span>
      </div>

      <button type="submit" class="login-btn">Login</button>

      <p class="bottom-link">Don't have an account? <a href="{{ url('/register') }}">Register</a></p>
    </form>
  </div>

  <script src="javascript/navbar/login.js"></script>
</body>
</html>
