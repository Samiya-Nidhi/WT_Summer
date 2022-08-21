

<!DOCTYPE html>
<html>

<head>
    <title>
        Manufacturer Dashboard
    </title>
    <link rel="stylesheet" href="../css/mystyle.css">
</head>
<h2>Manufacturer Dashboard</h2>
<body>

    
    <table>
        <tr>
            <td>
                <form action="" method="POST" onsubmit="event.preventDefault();onFormSubmit();" >
                    <div>
                        <label>Full Name*</label><label class="validation-error hide" id="fullNameValidationError">This field is required.</label>
                        <input type="text" name="fullName" id="fullName">
                    </div>
                    <div>
                        <label>User SerialNo</label>
                        <input type="text" name="User_SerialNo" id="User_SerialNo">
                    </div>
                    <div>

                        <label>User Id</label>
                        <input type="text" name="User_Id" id="User_Id">
                    </div>
                    <div>
                        <label>User Name</label>
                        <input type="text" name="User_Name" id="User_Name">
                    </div>
                    <div>
                        <label>Deliver Date</label>
                        <input type="text" name="Deliver_Date" id="Deliver_Date">
                    </div>
                    <div>
                        <label>Payment</label>
                        <input type="text" name="Payment" id="Payment">
                    </div>
                    <div  class="form-action-buttons">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                   </form>
                   <form action="../view/home.php"><button>Back</button></form>
            </td>
            <td>
                <table class="list" id="UserList">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>User SerialNo</th>
                            <th>User Id</th>
                            <th>User Name</th>
                            <th>Deliver Date</th>
                            <th>Payment</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <script src="../view/js/script.js"></script>
</body>

</html>


<?php
include '../control/manu_page.php';

$query="";

if(isset($_POST['submit'])){

    

   $fname= $_POST['fullName'];
   $userserial= $_POST['User_SerialNo'];
   $id= $_POST['User_Id'];
   $User_Name= $_POST['User_Name'];
   $Deliver_Date= $_POST['Deliver_Date'];
   $payment= $_POST['payment'];

        $insertquery = " INSERT INTO  `manufac`(`fname`, `userserial`, `id`, `User_Name`, `Deliver_Date`, `payment` ) VALUES ('$fname','$userserial','$id','$User_Name','$Deliver_Date','$payment')";

        $query = mysqli_query($con,$insertquery);

        


if($query)
{ 
    echo'Inserted successfully <br>';
}
else
{

       
    
        echo 'Inserted not successfully';
    
    
}

}