<?php
    $conn = mysqli_connect("localhost", "root", "", "vitareg") or die(mysqli_error($conn))
?>
        <!-- if(!empty($email) && !empty($pass) && !is_numeric($email)){
          if(!preg_match('/^[0-9]{10}+$/',$phone)){
            
            if($pass == $cpass){
            //insert data into database
            $query  = "insert into vitappl (name, age, phone, email, username, password, confirmpass) values ('$name', '$age', '$phone', '$email', '$username', '$pass', '$cpass')";

            mysqli_query($conn, $query);
            echo "<script type='text/javascript'> alert('Sucessfully Register')</script>";


            }
            else{
              echo "<script>alert('Passwords do not match')</script>";
            }
          }
          else{
            echo "<script type='text/javascript'> alert('Phone number must 10 digit')</script>";
            echo "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";
          }
        }
    } -->