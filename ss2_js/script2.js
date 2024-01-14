function validateForm() {
  const name = String(document.getElementById("name").value);
  const address = String(document.getElementById("address").value);
  const contact = Number(document.getElementById("contact").value);
  const email = document.getElementById("email").value;

  // Additional email validation
  const validEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

  if (name === "" || address === "" || contact === "" || email === "") {
    alert("Please fill in all required fields.");
    return false;
  } else if (contact.length > 10) {
    alert("Contact number should be maximum 10 digits.");
    return false;
  } else if (!validEmail) {
    alert("Please enter a valid email address.");
    return false;
  }
document.getElementById("hell").textContent = name;
  return true;
}
