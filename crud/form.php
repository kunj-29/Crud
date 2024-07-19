<?php include("connection.php") ?>
<!doctype html <html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CRUD Operation</title>
</head>

<body> 
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname"required>
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname"required>
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password"required>
            </div>

            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="conpassword"required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <select class="selectbox" name="gender"required>
                    <option value="">Selcet</option>
                    <option value="male">Male</option>
                    <option value="femal">Female</option>
                </select>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="text" class="input" name="email"required>
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone"required>
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea name="address"required></textarea>
            </div>

            <div class="input_field">
               <label class="check">
                    <input type="checkbox"required>
                    <span class="checkmark">
                        </span>
                    </label>
                <p> I accept the Terms and Conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>

        </div>
        </form>
    </div>
</body>

</html>

<?php
error_reporting(0);
    if($_POST['register'])
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd= $_POST['password'];
        $cpwd = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];


       
        $query = "INSERT INTO form (fname,lname,password,cpassword,gender,email,phone,address) values('$fname', '$lname', '$pwd', '$cpwd', '$gender','$email', '$phone', '$address')";
        $data = mysqli_query($conn, $query);
        
        if($data){
             echo "<script>alert('Registration Successful')</script>";
         }
         else{
             echo "<script>alert('Registration Failure')</script>";
         }
        
    }        
?>