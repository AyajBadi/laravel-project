<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register | Stationery Store</title>
  <link rel="stylesheet" href="css/navbar/register.css" />
</head>
<body>

  <div class="register-container">
    <form class="register-form" onsubmit="return validateForm()">
      
      <!-- ✅ Heading -->
      <h2 class="form-title">Create Account</h2>

      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" required placeholder="Enter your name">
      </div>

      <div class="form-group">
        <label for="mobile">Mobile Number</label>
        <input type="tel" id="mobile" pattern="[0-9]{10}" required placeholder="10-digit number">
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" required placeholder="Enter your email">
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" rows="3" required placeholder="Enter your address"></textarea>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" required placeholder="Create password">
      </div>

      <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" required placeholder="Confirm password">
        <span class="toggle-password" onclick="togglePassword()">👁</span>
      </div>

      <button type="submit" class="register-btn">Register</button>

      <p class="login-link">Already have an account? <a href="{{ url('/login') }}">Login here</a></p>
    </form>
  </div>

  <script src="javascript/navbar/register.js"></script>
</body>
</html>
