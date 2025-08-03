<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Featured Products - Stationery Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/featured.css') }}">
</head>
<body>

  <section class="featured-section">
    <h2 class="section-title">🛍️ Featured Products</h2>

    <div class="product-grid">
      @foreach($products as $product)
        <div class="product-card">
          <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
          <h3>{{ $product->name }}</h3>
          <p class="price">₹{{ number_format($product->price, 2) }}</p>
          <p class="desc">{{ Str::limit($product->description, 60) }}</p>
          <a href="/cart/add/{{ $product->id }}" class="btn">Add to Cart</a>
        </div>
      @endforeach
    </div>
  </section>

  <script src="{{ asset('javascript/feature/feature.js') }}"></script>
</body>
</html>
