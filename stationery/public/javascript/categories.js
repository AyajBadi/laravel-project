// Optional interactivity
document.querySelectorAll('.category-card').forEach(card => {
  card.addEventListener('click', () => {
    const name = card.querySelector('h3').innerText;
    alert(`You clicked on "${name}" category`);
    // For real app: redirect to category route
    // window.location.href = `/category/${name.toLowerCase()}`;
  });
});
