<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Stationery Hero Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/hero/hero.css') }}">
</head>
<body>

<section class="hero-slider">
  <div class="slider">
    <img src="{{ asset('image/image5.AVIF') }}" class="slide active" alt="Stationery Banner 1">
    <img src="{{ asset('image/image2.jpeg') }}" class="slide" alt="Stationery Banner 2">
    <img src="{{ asset('image/image4.jpg') }}" class="slide" alt="Stationery Banner 3">

    <div class="slider-content">
      <h1>Welcome to Our Stationery Store</h1>
      <p>Discover the latest in office & school supplies.</p>
    </div>
  </div>
</section>

<script src="{{ asset('javascript/hero/hero.js') }}"></script>
</body>
</html>
