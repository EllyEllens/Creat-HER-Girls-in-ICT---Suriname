function authenticateWithPin(destination) {
    var pin = prompt("Please enter your PIN:");
    // Here you can add additional validation of the PIN code, such as length check, etc.
    if (pin !== null && pin !== "") {
      
      alert("Authentication successful! Redirecting...");
      window.location.href = "PAGE.html";
    } else {
      // No PIN code entered
      alert("You need to enter a PIN to continue.");
    }
  }