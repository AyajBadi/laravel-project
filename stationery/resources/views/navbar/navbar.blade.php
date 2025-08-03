<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stationery Store</title>

  <!-- Link External CSS -->
  <link rel="stylesheet" href="{{ asset('css/navbar/navbar.css') }}">
</head>
<body>

  <!-- ✅ Navbar -->
  <nav class="navbar">
    <div class="navbar-container">
      <!-- Logo -->
      <div class="navbar-brand">
        <a href="#">📚 StationeryStore</a>
      </div>

      <!-- Toggle Button (mobile) -->
      <button class="toggle-button" id="toggle-btn">☰</button>

      <!-- Nav Links -->
      <div class="navbar-links" id="navbar-links">
        <a href="">Home</a>
        <a href="#">Products</a>
        <a href="#">Categories</a>
        <a href="{{ url('/cart') }}">Cart</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/login') }}">Login</a>
      </div>
    </div>
  </nav>

  <!-- ✅ Link JS -->
  <script src="{{ asset('javascript/navbar/navbar.js') }}"></script>
</body>
</html>
