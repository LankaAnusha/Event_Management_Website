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
    width: 60%;
    max-width: 380px;
    position: absolute;height:470px;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #ff3399;
    padding: 50px 60px 70px;
    text-align: center;
}

.form-box h1{
    font-size:30px;
    margin-bottom: 60px;
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
    border-radius: 3px;
    display: flex;
    align-items:center;
    max-height: 65px;
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
    font-size:15px;
        font-weight: Bold Oblique;
}
form p a{
    text-decoration: NONE;
    color: #3c00a0;    font-size:15px;
    
}

.btn-field{
    width:100%;
    display: flex;
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
    transform: background 1s;margin-left:70px;margin-top:-20px;
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
            <h1 id="title">Sign Up</h1>
            <form method="post" action="">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <br>
                    <p>Forgot Password <a href="#">Click Here!</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit" name="signup" id="signupBtn">Sign Up</button>
                </div>
            </form>
           </div> 
        </div>
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "msds";

    // Create connection
    $conn =mysqli_connect('localhost', 'root', '', 'msds');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['signup'])) {
        $email = $_POST['email'];
        $name = $_POST['username'];
        $password=$_POST['pwd'];
       
        $sql = "INSERT INTO user_details (Name,Email,Password) VALUES ('$name','$email','$password')";

        mysqli_query($conn, $sql);
   
    }
    
?>
        <script>
            var submitBtn = document.querySelector('button[name="signup"]');

// Add a click event listener to the submit button
submitBtn.addEventListener('click', function() {
    // Create a pop-up message
    alert('Your Credentials saved');
});
        </script>
    </body>
</html>