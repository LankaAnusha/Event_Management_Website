<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>SignIn and Signup page</title>
        <style>
            *{
    margin: 0;
    padding: 0;
    font-family: 'poppins',sans-serif;
    box-sizing: border-box;
}
body{overflow-y:hidden;}
section{ 
    width:100%;
    height: 100vh;
    background-image: url("https://tse2.mm.bing.net/th?id=OIP.vELrkolR5nWt7yTJMQF8vgHaFj&pid=Api&P=0&h=180");
    background-position: center;
    background-size: cover;
    position: relative;
    filter: blur(0px) brightness(40%);
}
.container{
    width:100%;
    height: 100vh;
    background-image: url("https://tse2.mm.bing.net/th?id=OIP.vELrkolR5nWt7yTJMQF8vgHaFj&pid=Api&P=0&h=180");
    background-position: center;
    background-size: cover;
    position: relative;
}

.form-box{
    width: 50%;
    max-width: 350px;
    position: absolute;height:400px;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #ff3399;
    padding: 50px 60px 70px;
    text-align: center;
}

.form-box h1{
    font-size:30px;margin-top:0px;
    margin-bottom: 40px;
    color: white;
    position: relative;
    font-family:Castellar, Bold Oblique;
}
.form-box h1::after{
    content: '';
    width: 90px;
    height: 4px;
    border-radius: 3px;
    background: white;
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translate(-50%);
}

.input-field{
    background: #eaeaea;
    margin: 15px 0;
    border-radius: 3px;margin-left:-25px;
    display: flex;
    align-items:center;
    max-height: 55px;width:280px;
    transition: max-height 0.5s;
    overflow: hidden;
}
input[type="text"] {
    color: #5c5c5c;
  }
input[type="email"] {
    color: #5c5c5c;
  }
input{
    width: 100%;
    background: transparent;
    border: 0;
    outline: 0;
    padding: 18px 15px;
}
input::placeholder {
    font: 13px/3 Castellar;
}
.input-field i{
    margin-left: 15px;
    color: black;
}

form p{
    text-align: left;
    font-size:15px;margin-left:-15px;
        font-weight: Bold Oblique;
}
form p a{
    text-decoration: NONE;
    color: #3c00a0;    font-size:15px;
    
}

.btn-field{
    width:100%;
    display: flex;margin-top:-65px;margin-left:60px;
    justify-content: space-between;
}

.btn-field button{
    flex-basis: 48%;
    background: #3c00a0;
    color:#fff;
   font-family: Castellar, Bold Oblique;
    font-size:15px;
    height: 40px;
    border-radius: 20px;
    border: 0;
    outline: 0;
    cursor: pointer;
    transform: background 1s;
}

.input-group{
height: 280px;
}

.btn-field button.disable{
    background: #eaeaea;
    color: #555;
}
        </style>
        <script src="https://kit.fontawesome.com/7d1e906527.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <section></section>
           <div class="form-box">
            <h1 id="title">Sign In</h1>
            <form method="post" action="">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <br>
                    <p>If you don't have account, <a href="signup.php">Create account now!</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit" name="login" id="signinBtn">Sign In</button>
                </div>
            </form>
           </div> 
        </div>
        <?php
     $conn = mysqli_connect('localhost', 'root', '', 'msds');

     // Check if the login form was submitted
     if (isset($_POST['login'])) {
         // Retrieve email and password from the form
         $email = $_POST['email'];
         $password = $_POST['pwd'];
     
         // Query the database to retrieve the user's record
         $query = "SELECT * FROM user_details WHERE Email='$email'";
         $result = mysqli_query($conn, $query);
     
         // Check if a record was found
         if (mysqli_num_rows($result) == 1) {
             // Retrieve the user's record
             $row = mysqli_fetch_assoc($result);
     
             // Compare the password entered in the form with the password stored in the database
             if (password_verify($password, $row['Password'])) {
                 // Start a session and store the user's information in session variables
                 session_start();
                 $_SESSION['user_id'] = $row['id'];
                 $_SESSION['user_name'] = $row['name'];
     
                 echo "User verified!";
                 // Redirect the user to the main page
                 header("Location: main_page.php");
                 exit();
             } else {
                 // Password is incorrect, display error message
                 echo "Invalid password";
             }
         } else {
             // No record was found, display error message
             echo "Invalid email";
         }}
       
         
       
    
?>
    </body>
</html>