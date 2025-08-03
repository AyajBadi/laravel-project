function validateContactForm() {
  const name = document.getElementById('name').value.trim();
  const mobile = document.getElementById('mobile').value.trim();
  const message = document.getElementById('message').value.trim();

  if (name === "" || mobile.length !== 10 || message === "") {
    alert("Please fill all fields correctly.");
    return false;
  }
  return true;
}
