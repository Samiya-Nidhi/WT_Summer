function validateForm() {
    console.log("calling v from");
    let x = document.forms["adding"]["fname"].value;
    if (x == "") {
      alert("First Name must be filled out");
      return false;
    }

    let y = document.forms["adding"]["lname"].value;
    if (y == "") {
      alert("Last Name must be filled out");
      return false;
    }

    let z = document.forms["adding"]["gender"].value;
    if (z == "") {
      alert("Gender must be filled out");
      return false;
    }

    let a = document.forms["adding"]["DOB"].value;
    if (a == "") {
      alert("Date Of Birth must be filled out");
      return false;
    }

    let b = document.forms["adding"]["religion"].value;
    if (b == "") {
      alert("Religion must be filled out");
      return false;
    }

    let e = document.forms["adding"]["praddress"].value;
    if (e == "") {
      alert("Present Address must be filled out");
      return false;
    }

    let c = document.forms["adding"]["pmaddress"].value;
    if (c == "") {
      alert("Permanent Address must be filled out");
      return false;
    }

    let d = document.forms["adding"]["phone"].value;
    if (d == "") {
      alert("Phone must be filled out");
      return false;
    }

    let f = document.forms["adding"]["website"].value;
    if (f == "") {
      alert("Website must be filled out");
      return false;
    }

    let i = document.forms["adding"]["username"].value;
    if (i == "") {
      alert("Username must be filled out");
      return false;
    }

    let g = document.forms["adding"]["password"].value;
    if (g == "") {
      alert("Password must be filled out");
      return false;
    }

    let h = document.forms["adding"]["confirmpassword"].value;
    if (h == "") {
      alert("Confirm Password must be filled out");
      return false;
    }
  }