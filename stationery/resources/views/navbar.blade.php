<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stationery Store</title>
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>

  <nav class="navbar">
    <div class="navbar-brand">📚 StationeryStore</div>
    <button class="toggle-button" onclick="toggleMenu()">☰</button>
    <div class="navbar-links" id="navbar-links">
      <a href="index.html">Home</a>
      <a href="products.html">Products</a>
      <a href="cart.html">Cart</a>
      <a href="about.html">About Us</a>
      <a href="contact.html">Contact</a>
      <a href="login.html">Login</a>
    </div>
  </nav>

  <script src="{{ asset('javascript/navbar.js') }}"></script>

</body>
</html>
