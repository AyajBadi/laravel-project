// Optional: Show alert on add to cart
document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', () => {
    alert("Product added to cart!");
  });
});
