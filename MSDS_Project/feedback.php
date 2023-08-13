<!DOCTYPE html>
<html>
    <head>
        <title>Feedback Form</title>
         <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
    margin:0;
    padding:0;
    font-family: 'Poppins',sans-serif;
    box-sizing:border-box;
    outline:none;
}
body{
    display:flex;
    min-height:100vh;
    align-items:center;
    justify-content:center;overflow-x:hidden;position:relative;
}
.container{
    width:440px;margin-top:20px;margin-left:770px;
    background:#ff3399;text-align:center;
    box-shadow:0 0 8px rgba(250,250,250,0.6);
    opacity:0.6;
}
.container form{
    width:100%;
    text-align:center;
    padding:25px 20px;
   
}
input[type="text"] {
    color: black;font-size:18px;
  }
input[type="email"] {
    color:black;font-size:18px;
  }
  textarea{color:black;font-size:10px;}
  input::-webkit-input-placeholder {
    font: 13px/3 Castellar;
}
textarea::-webkit-input-placeholder {
    font: 13px/3 Castellar;
}
form h1{
    padding:10px 0;
    color:white; font-family:Castellar, Bold Oblique;font-size:25px;
}
form .id{
    position: relative;
}
.id i{
    position:absolute;
    font-size:20px;
    top:50%;
    right:20px;
    color:black;
    transform:translateY(-50%);
}
section{
    position:absolute;
    height:100%;
    width:100%;
    background:url(https://thumbs.dreamstime.com/b/feedback-word-made-building-blocks-white-background-173994543.jpg);
    background-size:cover;
    background-position: center;
    filter:blur(2px) brightness(30%);
}
form input{
    width:400px;
    height:35px;
    margin:4px 0;
    border:1px solid #ff3399;
    border-radius:3px;
    background:white;
    padding:0 15px;
    padding-right:45px;
    font-size:20px;
}
form textarea{
    padding:5px 15px;
    border:1px solid #ff3399;
    border-radius:3px;
    background:white;
    font-size:20px;
    width:100%;
    margin:4px 0;height:120px;
}
form button{
    margin-top:5px;
    border:none;
    background:white;font-family:Castellar, Bold Oblique;
    color:#222;
    padding:10px 0;
    width:100%;
    font-size:20px;
    font-weight:800;
    cursor:pointer;
    border-radius:3px;

}
         </style>
        <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    </head>
    <body>
        <section></section>
        <div class="container">
          <form method="post" action="">
            <h style="font-family:Castellar, Bold Oblique;font-weight:bold;font-size:28px;color:white;"><pre>Write a Review for your 
  Event Vendors</pre></h>
           <h style="font-size:14px;"> Please tell us your experience below.
            Your reviews help others in making informed decisions.</h><br><br>
            <div class="id">
                <input type="email" name="email" placeholder="Your Email Address">
                <i class="far fa-envelope"></i>
            </div>
            <div class="id">
                <input type="text" name="vendor" placeholder="Type Vendor Name" color="white">
                <i class="far fa-user"></i>
            </div>
            <textarea cols="20" rows="5" name="fb" placeholder="Tell us about your Experience"></textarea>
            <div class="id">
                <input type="text" name="rating" placeholder="Overall rating on the Event">
                <i class="fa fa-star"></i>
            </div>
            <button name="submit">Submit</button>
          </form>
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
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $name = $_POST['vendor'];
        $feed=$_POST['fb'];
        $rate = $_POST['rating'];
        $sql = "INSERT INTO feedback (Email,Vendor,Review,Rating) VALUES ('$email','$name','$feed','$rate')";

        mysqli_query($conn, $sql);
    }
?>
<script>
    // Select the submit button
    var submitBtn = document.querySelector('button[name="submit"]');

    // Add a click event listener to the submit button
    submitBtn.addEventListener('click', function() {
        // Create a pop-up message
        alert('Your Review submitted successfully!');
    });
</script>
    </body>
</html>