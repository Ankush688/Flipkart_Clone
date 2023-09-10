function validateForm() {
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

	if ( email == ""|| password == "") {
	  alert("Please fill out all fields");
	  return false;
	} else if (!emailPattern.test(email)) {
	  alert("Please enter a valid email address");
	  return false;
	} else {
	  return true;
	}
  }