function togglePassword() {
  const passwordField = document.getElementById("password");
  const type = passwordField.getAttribute("type");

  passwordField.setAttribute(
    "type",
    type === "password" ? "text" : "password"
  );
}
