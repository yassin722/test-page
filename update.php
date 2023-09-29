<!DOCTYPE html>
<html>
<head>
    <title>update Page</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<?php
if(isset($_POST['update'])){

include 'connect.php';

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$password=$_POST['password'];
$cpassword=$_POST['confirm_password'];
$email=$_POST['e_mail'];

$stm= "update user set FirstName='$fname',LastNmae='$lname', password='$password',ConfirmPassword='$cpassword' where email='$email'";
$x= mysqli_query($conn,$stm);
if($x){

    echo" updated ";
}
else{
    
        echo "Error: " . mysqli_error($conn);
    
}
}







?>
    <div class="all">
        <div class="border">
            <br><br>
            <div class="head">
                <h1>update your informaion </h1><br>
            </div>  
            <br><br>
            <form action="" method="post">
                <div class="personal">
                    
                        <div class="one"> 
                            <input class="first_name"   type="text" required placeholder="First Name" name="first_name">
                        </div>
                        
                        <div class="two">
                            <input class="last_name" type="text" required placeholder="Last Name" name="last_name">
                        
                    </div>

                    <br> <br><br>
                    
                    <div class="three">
                        <input class="pass"  type="password" required placeholder="Password" name="password">
                    </div>
                    <br> <br><br>
                    <div class="four">
                        <input class="cpass" type="password" required placeholder="Confirm Password" name="confirm_password">
                    </div>
                    <br> <br><br>
                    <div class="five">
                        <input class="email" type="email" required placeholder="Email" name="e_mail">
                    </div>
                    <br> <br><br>
                    <div>
                        <input id="termsCheck" type="checkbox" name="check">
                        <label class="term-check" for="termsCheck"><b>I accept the terms of use & Privacy policy</b></label>
                    </div>

                    <br><br><br><br>
                        <div>
                            <input  class= " submit"type="submit" value="update" name="update">
                        </div>
                        <br><br>
                        
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>
