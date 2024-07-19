<html>
<head>
    <title>Display</title>
    <style>
       body
       {
              background-color: cornflowerblue;
       }
       table
       {
              background-color: white;
       }
       .update
       {
              background-color: green;
              color: white;
              border:0;
              outline: none;
              border-radius:5px;
              height: 23px;
              width: 80px;
              font-weight: bold;
              cursor: pointer;
       }
       .delete
       {
              background-color: red;
              color: white;
              border:0;
              outline: none;
              border-radius:5px;
              height: 23px;
              width: 80px;
              font-weight: bold;
              cursor: pointer;
       }
     </style>
</head>


<?php
error_reporting(0);
 include("connection.php");

 $query = "SELECT * FROM form";
 $data = mysqli_query($conn, $query);

 $total = mysqli_num_rows($data);

 if($total != 0) {
    ?>
       <h2 align="center"><mark> Display All Records </mark></h2>
       <center>
       <table border="1" cellspacing="7" width="100%">
              <tr>
                   <th width="5%">id </th>
                   <th width="8%">First name </th>
                   <th width="8%">Last name </th>
                   <th width="10%">Gender </th>
                   <th width="20%">Email </th>
                   <th width="10%">Phone </th>
                   <th width="24%">Address </th>
                   <th width="15%">Operations </th> 
              </tr>

       <?php

       while($result = mysqli_fetch_assoc($data))
       {
              echo " 
              <tr>
                  <td>".$result['id']."</td>
                   <td>".$result['fname']."</td>
                  <td>".$result['lname']."</td>
                  <td>".$result['gender']."</td>
                  <td>".$result['email']."</td>
                  <td>".$result['phone']."</td>
                  <td>".$result['address']."</td>
                  
                  <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='Update' <a/>

                   <a href='delet.php?id=$result[id]'><input type='submit' value='Delete' class='Delete' onclick='return checkdelete()'> <a/></td>
              </tr>";    
       }
 }
 else {
        echo "table is empty";
 }
?>
</table>
</center>
<script>
 function checkdelete()
 {
       return confirm("Are you sure you want to delete this record?");
 }
</script>