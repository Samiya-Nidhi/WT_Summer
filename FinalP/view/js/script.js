 var selectedRow = null

function onFormSubmit() {
    if (validate()) {
       var formData = readFormData();
        if (selectedRow == null)
        insertNewRecord(formData);
         else
            updateRecord(formData);
        resetForm();
    }
 }

function readFormData() {
     var formData = {};
     formData["fullName"] = document.getElementById("fullName").value;
     formData["User_SerialNo"] = document.getElementById("User_SerialNo").value;
    formData["User_Id"] = document.getElementById("User_Id").value;
     formData["User_Name"] = document.getElementById("User_Name").value;
    formData["Deliver_Date"] = document.getElementById("Deliver_Date").value;
     formData["Payment"] = document.getElementById("Payment").value;
    return formData;
 }

 function insertNewRecord(data) {
     var table = document.getElementById("UserList").getElementsByTagName('tbody')[0];
     var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.fullName;
    cell2 = newRow.insertCell(1);
     cell2.innerHTML = data.User_SerialNo;
     cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.User_Id;
    cell4 = newRow.insertCell(3);
     cell4.innerHTML = data.User_Name;
     cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.Deliver_Date;
    cell6 = newRow.insertCell(5);
    cell6.innerHTML = data.Payment;
    cell6 = newRow.insertCell(6);
    cell6.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
 }
 function resetForm() {
     document.getElementById("fullName").value = "";
     document.getElementById("User_SerialNo").value = "";
    document.getElementById("User_Id").value = "";
     document.getElementById("User_Name").value = "";
    document.getElementById("Deliver_Date").value = "";
    document.getElementById("Payment").value = "";
    selectedRow = null;
 }

 function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("fullName").value = selectedRow.cells[0].innerHTML;
    document.getElementById("User_SerialNo").value = selectedRow.cells[1].innerHTML;
    document.getElementById("User_Id").value = selectedRow.cells[2].innerHTML;
    document.getElementById("User_Name").value = selectedRow.cells[3].innerHTML;
    document.getElementById("Deliver_Date").value = selectedRow.cells[4].innerHTML;
    document.getElementById("Payment").value = selectedRow.cells[5].innerHTML;
 }
 function updateRecord(formData) {
     selectedRow.cells[0].innerHTML = formData.fullName;
     selectedRow.cells[1].innerHTML = formData.User_SerialNo;
    selectedRow.cells[2].innerHTML = formData.User_Id;
     selectedRow.cells[3].innerHTML = formData.User_Name;
     selectedRow.cells[4].innerHTML = formData.Deliver_Date;
     selectedRow.cells[5].innerHTML = formData.Payment;
 }

 function onDelete(td) {
     if (confirm('Are you sure to delete this record ?')) {
         row = td.parentElement.parentElement;
         document.getElementById("UserList").deleteRow(row.rowIndex);
        resetForm();
    }
 }
 function validate() {
     isValid = true;
    if (document.getElementById("fullName").value == "") {
         isValid = false;
         document.getElementById("fullNameValidationError").classList.remove("hide");
    } else {
         isValid = true;
        if (!document.getElementById("fullNameValidationError").classList.contains("hide"))
            document.getElementById("fullNameValidationError").classList.add("hide");
    }
    return isValid; }