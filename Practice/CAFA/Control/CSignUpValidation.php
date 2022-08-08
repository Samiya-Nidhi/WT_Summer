<?php
$nameerr=$emailerr=$doberr=$gendererr=$phnerr=$cityerr=$addresserr=$niderr=$passerr=$signup="";
$haserr=0;
if(isset($_POST["CSubmit"]))
{
     $name=$_REQUEST["Cname"];
     if(empty($name)|| !preg_match("/^([a-zA-Z' ]+)$/", $name) )
     {
          $nameerr = " * Please enter valid name." ;
     }
     $pass=$_REQUEST["Cpass"];
     if(empty($pass))
     {
          $passerr = " * Please insert the password.";
     }
     if(strlen($pass)<7)
     {
          $passerr = " * Your password must be munimum 6 characters.";
     }
     $email=$_REQUEST["Cemail"];
     if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
     {
          $emailerr = " * Please enter valid email.";
     }
     $dob=$_REQUEST["Cdob"];
     if(empty($dob))
     {
          $doberr = " * date of birth invalide.";
     }
     if(!isset($_POST["Cgender"]))
     {
          $gendererr = " * Please select your gender.";
     }
     $phn=$_REQUEST["Cphn"];
     if(empty($phn))
     {
          $phnerr = " * Please insert your phone number.";
     }
     if(!preg_match("/^[0-9\-]|[\+0-9]|[0-9\s]|[0-9()]*$/", $phn))
     {
          $phnerr = " * Invalid phone number!";
     }
     $city=$_REQUEST["Ccity"];
     if(empty($city))
     {
          $cityerr = " * Please insert your city.";
     }
     if(!preg_match("/^[a-zA-Z'-]+$/", $city))
     {
          $cityerr = " * Invalid city!";
     }
     if(empty($nid))
     {
          $niderr = " * Please insert your NID number.";
     }
     if(!preg_match("/^[0-9\-]|[\+0-9]|[0-9\s]|[0-9()]*$/", $nid))
     {
          $niderr = " * Invalid NID number!";
     }
     $file=$_REQUEST["myfile"];
     if(empty($file))
     {
          $file = " * Please choose your file.";
     }
     
     
     else
     {
          $formdata = array(
               'Fullname'=> $_POST["Cname"],
               'Password'=> $_POST["Cpass"],
               'Email'=> $_POST["Cemail"],
               'DOB'=> $_POST["Cdob"],
               'Gender'=> $_POST["Cgender"],
               'Phone no'=> $_POST["Cphn"],
               'City'=> $_POST["Ccity"],
               'NID no'=> $_POST["Cnid"],
               'File'=> $_POST["myfile"]
               
          );
          
                 $existingdata = file_get_contents('../Files/CSignUpData.json');
                 $tempJSONdata = json_decode($existingdata);
                 $tempJSONdata[] =$formdata;
                 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
                  
                 //write json data into data.json file
                 if(file_put_contents('../Files/CSignUpData.json', $jsondata))
                 {
                    header("location:../View/CLogin.php");
                 }
                 else
                 {
                     $signup= "failed!";
                 }
     }
} 

        
?>