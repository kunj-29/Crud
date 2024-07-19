<?php include("connection.php"); 

$id = $_GET['id'];

$query = "SELECT * FROM `form` WHERE id='$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!doctype html <html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CRUD Operation</title>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Update Student Details
            </div>

            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname" required>
                </div>

                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" value="<?php echo $result['lname']; ?>" class="input" name="lname" required>
                </div>

                <div class="input_field">
                    <label>Password</label>
                    <input type="password" value="<?php echo $result['password']; ?>" class="input" name="password" required>
                </div>

                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="password" value="<?php echo $result['cpassword']; ?>" class="input" name="conpassword" required>
                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <select class="selectbox" name="gender" required>
                        <option value="">Selcet</option>

                        <option value="male"
                            <?php
                            if($result['gender'] == 'male'){ 
                            echo "selected";
                            }
                            ?>
                        >
                        Male</option>

                        <option value="female"
                            <?php
                            if($result['gender'] == 'female'){ 
                            echo "selected";
                            }
                            ?>
                        >
                        Female</option>
                    </select>
                </div>

                <div class="input_field">
                    <label>Email Address</label>
                    <input type="text" value="<?php echo $result['email']; ?>" class="input" name="email" required>
                </div>

                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="text" value="<?php echo $result['phone']; ?>" class="input" name="phone" required>
                </div>

                <div class="input_field">
                    <label>Address</label>
                    <textarea name="address" required><?php echo $result['address']; ?></textarea>
                </div>

                <div class="input_field">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark">
                        </span>
                    </label>
                    <p> I accept the Terms and Conditions</p>
                </div>

                <div class="input_field">
                    <input type="submit" value="update Details" class="btn" name="update">
                </div>

            </div>
        </form>
    </div>
</body>

</html>

<?php
error_reporting(0);
    if($_POST['update'])
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd= $_POST['password'];
        $cpwd = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];


        $query = "UPDATE form set fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',gender=' $gender',email=' $email',phone='$phone',address='$address' where id='$id'";
        
        $data = mysqli_query($conn, $query);
        
        if($data){
          //   echo "<script>alert('Record Updated')</script>";
             ?>

             <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/crud/display.php"/>

             <?php
         }
         else{
             echo "<script>alert('Failed to update')</script>";
         }
        
    }        
?>