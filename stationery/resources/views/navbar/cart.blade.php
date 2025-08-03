<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Cart - Stationery Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>
<body>

<div class="cart-container">
  <h2>Shopping Cart</h2>

  @if(count($cartItems) > 0)
  <table class="cart-table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Subtotal</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cartItems as $id => $item)
        <tr data-id="{{ $id }}">
          <td>{{ $item['name'] }}</td>
          <td><input type="number" min="1" value="{{ $item['quantity'] }}" onchange="updateQuantity({{ $id }}, this.value)"></td>
          <td>₹{{ $item['price'] }}</td>
          <td>₹{{ $item['price'] * $item['quantity'] }}</td>
          <td><button onclick="removeItem({{ $id }})">❌</button></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="cart-summary">
    <p><strong>Total:</strong> ₹{{ $total }}</p>
    <div class="cart-actions">
      <a href="/products" class="btn">Continue Shopping</a>
      <a href="/checkout" class="btn checkout">Proceed to Checkout</a>
    </div>
  </div>
  @else
    <p>Your cart is empty.</p>
  @endif
</div>

<script src="{{ asset('js/cart.js') }}"></script>
</body>
</html>
