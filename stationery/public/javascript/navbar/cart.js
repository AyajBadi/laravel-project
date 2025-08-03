function updateQuantity(id, qty) {
  fetch('/cart/update/${id}', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: JSON.stringify({ quantity: qty })
  }).then(() => location.reload());
}

function removeItem(id) {
  fetch('/cart/remove/${id}', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  }).then(() => location.reload());
}
