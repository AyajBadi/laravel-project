<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | Stationery Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/navbar/contact.css') }}">
</head>
<body>

<div class="contact-container">
  <form class="contact-form" method="POST" action="{{ url('/contact') }}" onsubmit="return validateContactForm();">
    @csrf
    <h2>Contact Us</h2>

    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required placeholder="Your full name">
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required placeholder="Your email">
    </div>

    <div class="form-group">
      <label for="mobile">Mobile Number</label>
      <input type="tel" id="mobile" name="mobile" required placeholder="Your 10-digit mobile number">
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" required placeholder="Write your message here..."></textarea>
    </div>

    <button type="submit">Send Message</button>

    @if(session('success'))
      <p class="success-message">{{ session('success') }}</p>
    @endif
  </form>
</div>

<script src="{{ asset('javascript/navbar/contact.js') }}"></script>
</body>
</html>
