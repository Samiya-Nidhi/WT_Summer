function validateForm() {
    
    let x = document.forms["forget"]["username"].value;
    if (x == "") {
      alert("Username must be filled out");
      return false;
    }

    let y = document.forms["forget"]["newpassword"].value;
    if (y == "") {
      alert("New Password must be filled out");
      return false;
    }

    let z = document.forms["forget"]["retypepassword"].value;
    if (y == "") {
      alert("Re-Type Password must be filled out");
      return false;
    }
  }