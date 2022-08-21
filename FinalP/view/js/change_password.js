function validateForm() {
    
    let x = document.forms["change"]["username"].value;
    if (x == "") {
      alert("Username must be filled out");
      return false;
    }

    let y = document.forms["change"]["oldpassword"].value;
    if (y == "") {
      alert("Old Password must be filled out");
      return false;
    }

    let z = document.forms["change"]["newpassword"].value;
    if (y == "") {
      alert("New Password must be filled out");
      return false;
    }
  }