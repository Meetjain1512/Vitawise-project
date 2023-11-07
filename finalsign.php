<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['Name'];
        $age = $_POST['Age'];
        $phone = $_POST['Phone'];
        $email = $_POST['Email'];
        $username = $_POST['Username'];
        $pass = $_POST['password'];
        $cpass = $_POST['Cpassword'];

        if(!empty($email) && !empty($pass) && !is_numeric($email)){
          if(!is_numeric($name) && !preg_match('/^[0-9]{11}+$/',$phone) ){
            if($pass == $cpass){
            //insert data into database
            $query  = "insert into vitappl (name, age, phone, email, username, password, cpassword) values ('$name', '$age', '$phone', '$email', '$username', '$pass', '$cpass')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $_SESSION['Username'] = $username;
                // Successful registration, redirect to the homepage
                header("location: homepage.php");
                        die;
                echo "<script type='text/javascript'> alert('Sucessfully Register')";
                exit; // Make sure to exit to stop further script execution
            } else {
                echo "<script>alert('Registration failed. Please try again.');</script>";
            }
            echo "<script type='text/javascript'> alert('Sucessfully Register')</script>";
            }
            else{
              echo "<script>alert('Passwords do not match')</script>";
            }
          }
          else{
            echo "<script>alert('Invalid Name or Phone Number')</script>";
          }
     }
     else{
      echo "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/favicon.ico">
    <link rel="stylesheet" href="signcss.css">
    <script src="sign.js"></script>
   <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
    <title>VitaWise signup</title>
</head>
<style>   
input[type="submit"]{
    background: var(--serenity-green-50, #9bb068);
    margin-top: 0px;
    margin-left: 220px;
    width: 250px;
    height: 50px;
    border-radius: 1000px;
    display: flex;
    flex-direction: row;
    gap: 32px;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    cursor: pointer;
    color: var(--mindful-gray-white, #ffffff);
    font: var(--textlg-bold, 700 25px 'Urbanist', sans-serif);
    position: relative;
    border: none;
}
input[type="submit"]:hover{
  background: var(--serenity-green-50,orangered );
}
/* .submit{
  text-decoration: none;
} */
.don-t-have-an-account-sign-up {
    text-align: center;
    font: 700 24px "Urbanist", sans-serif;
    position: absolute;
    color: #4b3425;
    left: 100px;
    margin-top: 15px;
    width: 475px;
    height: 51px;
  }

</style>
<body>
     <!--Header  -->
     <div class="header">
        <div class="rectangle-1352">
        <div class="main">
            <a class="mainmenu" href="mainpanel.html">Main Menu</a>
            <div class="menudot"></div>
          </div>
        <div class="vita-wise">
        
                  <img class="logo" src="Images/Logo.png">&nbsp;Vitawise</div>
      </div>
      <div class="icons">
        <div class="button-icon">
          <div class="monotone-46-email-1">
            <a href="ContactUs.html"><img src="Images/Mail.png"></a>
          </div>
        </div>
    </div>
    </div>
    <!-- Signup -->
    <div class="login-page-copy">
        
        <img class="image-17" src="Images/image-17.png" /><img
          class="image-18"
          src="Images/image-18.png"
        /><img class="image-19" src="Images/image-19.png" />
        <div class="group-33947">
          <div class="rectangle-1360">
              <h1>VitaWise</h1>
              <form action="" method="POST" id="signup">
                    <div class="rectangle-1361">
                        <label class="name" for="Name">Name</label>
                        <input type="text" id="name" name="Name"  required><br><br>
                    </div>
                    <div class="rectangle-1362">
                        <label class="age" for="age">Age</label>
                        <input type="number" id="age" name="Age" required><br><br>
                    </div>
                    <div class="rectangle-1363">
                        <label class="phone" for="Phone No.">Phone No.</label>
                        <input type="text" id="phone" name="Phone" required><br><br>
                    </div>
                    <div class="rectangle-1364">
                        <label class="mail" for="email">Email</label>
                        <input type="email" id="email" name="Email" required><br><br>
                    </div>
                    <div class="rectangle-1365">
                        <label class="username" for="username">Username</label>
                        <input type="text" id="username" name="Username"  required><br><br>
                    </div>
                    <div class="rectangle-1366">
                        <label class="pass" for="password">Password</label>
                        <!-- <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
                        <input type="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" required><br><br>
                    </div>
                    <div class="rectangle-1367">
                        <label class="pass1" for="confirmpassword">Confirm Password</label>
                        <input type="password"  id="confirmpass" name="Cpassword" required><br><br>
                    </div>
                    <div>  
                      <input id="submitButton" type="submit" value="Sign Up" name="">
                    </div>
                </form>
                <!-- <script>
                  document.getElementById("signup").addEventListener("input", function () {
                  const name = document.getElementById("name").value;
                  const age = document.getElementById("age").value;
                  const phone = document.getElementById("phone").value;
                  const email = document.getElementById("email").value;
                  const username = document.getElementById("username").value;
                  const password = document.getElementById("password").value;
                  const confirmpass = document.getElementById("confirmpass").value;
                  const submitButton = document.getElementById("submitButton");
                  if (name.trim() !== "" && age.trim() !== "" && phone.trim() !== "" && email.trim() !== "" && username.trim() !== "" && password.trim() !== "" && confirmpass.trim() !== "" ) {
                      submitButton.removeAttribute("disabled");
                  } else {
                      submitButton.setAttribute("disabled", "true");
                  }
              });
              document.getElementById("name").addEventListener("input", checkAllFieldsFilled);
              document.getElementById("age").addEventListener("input", checkAllFieldsFilled);
              document.getElementById("phone").addEventListener("input", checkAllFieldsFilled);
              document.getElementById("email").addEventListener("input", checkAllFieldsFilled);
              document.getElementById("username").addEventListener("input", checkAllFieldsFilled);
              document.getElementById("password").addEventListener("input", checkAllFieldsFilled);
              document.getElementById("confirmpass").addEventListener("input", checkAllFieldsFilled);

              // Initial check when the page loads
              checkAllFieldsFilled();

              // Form submission check
              document.getElementById("signup").addEventListener("submit", function (event) {
                  if (document.getElementById("submitButton").hasAttribute("disabled")) {
                      alert("Please fill in all fields before proceeding.");
                      event.preventDefault(); // Prevent the form from submitting
                  }
              });
              </script> -->
                <!-- <div class="button" onclick="redirectToLogin()">
                    <div class="article-button-text"  >
                      Signup</div></a>
                    <div class="article-button-icon" >
                        <svg class="monotone-04-arrow-right-sm" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 12L21.5 12" stroke="#9BB068" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M17.0529 17.7956C18.3287 17.4537 19.4561 16.7004 20.2601 15.6526C21.0642 14.6047 21.5 13.3208 21.5 12C21.5 10.6792 21.0642 9.3953 20.2601 8.34743C19.4561 7.29957 18.3287 6.54629 17.0529 6.20445" stroke="#9BB068" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div></a>
            </div> -->
            <div class="don-t-have-an-account-sign-up">
                <span
                  ><span class="don-t-have-an-account-sign-up-span"
                    >ALREADY HAVE AN ACCOUNT? </span
                  ><span class="don-t-have-an-account-sign-up-span2"
                    ><a class="log" href="finallogin.php">Login</a></span
                  ></span
                >
              </div>
</body>
</html>