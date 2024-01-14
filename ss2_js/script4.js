function reverse() {
  let str = document.getElementById("str1").value;
  // Create an empty string to store the reversed characters
  let reversed = "";

  // Iterate through the original string in reverse order
  for (let i = str.length - 1; i >= 0; i--) {
    // Append each character to the reversed string
    reversed += str[i];
  }

  // Return the reversed string
  let v = reversed;
  document.getElementById("reversed").innerHTML = v;
}
