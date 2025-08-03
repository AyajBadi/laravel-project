function togglePassword() {
  const password = document.getElementById("password");
  const confirm = document.getElementById("confirm-password");

  if (password.type === "password") {
    password.type = "text";
    confirm.type = "text";
  } else {
    password.type = "password";
    confirm.type = "password";
  }
}

function validateForm() {
  const password = document.getElementById("password").value;
  const confirm = document.getElementById("confirm-password").value;

  if (password !== confirm) {
    alert("Passwords do not match!");
    return false;
  }
  return true;
}
