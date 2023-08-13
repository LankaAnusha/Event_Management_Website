<!DOCTYPE html>  
      <html>  
        <head>  
          <title>Main Page</title>

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <style>
            
@import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
  html{ overflow:hidden;}
  body{width:100%;height:100vh;}
  .toppane1{
    width:100%;
    height:4.5%;  
    background-color: #cc0066;
  }
  .toppane{
    width: 100%;
    height: 12%;
    background-color:#ff3399;
    border-collapse: collapse;
  }
  .bottompane{
    width:100%;height:100%;
    background-color:white;
    border-collapse: collapse;

  }
  .image-text-container {
    width: 100%;
  }
  .slider{
    width:100%;
    height:600px;
    background:url(the_event_planner.jpeg);


    background-size: cover;
       animation:slide 30s infinite;
}
@keyframes slide{
    20%
    {background:url(https://image.wedmegood.com/resized/1900X/uploads/city_bg_image/1/delhi_bg.jpeg);background-repeat: no-repeat;background-size: cover;}
    40%
    {background:url(p12.jpeg);background-repeat: no-repeat;background-size: cover;
    }
    60%
    {background:url(p14.jpeg);background-repeat: no-repeat;background-size: cover;
    }
    70%
    {background:url(p10.jpeg);background-repeat: no-repeat;background-size: cover;
    }
    100%
    {background:url(p16.jpeg);background-repeat: no-repeat;background-size: cover;
    }
    
    
}

  .image-text-container img {
    float: left;
  margin-right: 30px;
    border-radius: 50%;
    margin-top:0px;
    padding:20px;
    width: 100px;
    background-color: white;
  

  }
  z {
    font-family:Castellar, Bold Oblique;
    font-size: 17px;
    font-weight: bold;
    color:white;
   margin-left:10px;
    letter-spacing: 1.5px;
    transform: scale(0.94);
  
    animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
    
  }
  z1{
    font-size: 14px;
    color:white;
   float:right;
    letter-spacing:0.5px;
    transform: scale(0.94);
    margin-right:10px;
  
    animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
    
  }
 
  @keyframes scale {
    100% {
      transform: scale(1);
    }
  }
  
  span {
    display: inline-block;
    opacity: 0;
    filter: blur(4px);
  }
  
  span:nth-child(1) {
    animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
  }
  
  span:nth-child(2) {
    animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
  }
  
  span:nth-child(3) {
    animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
  }
  
  span:nth-child(4) {
    animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
  }
  
  span:nth-child(5) {
    animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
  }
  span:nth-child(6) {
    animation: fade-in 0.8s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
  }
  span:nth-child(7) {
    animation: fade-in 0.8s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
  }
  
@keyframes fade-in {
  100% {
    opacity: 1;
    filter: blur(0);
  }
}

  .toppane1 s{
    font-family:Castellar, Bold Oblique;
    font-size: 19px;
    font-weight: bold;
    color:white;

    letter-spacing: 0.7px;

  }
  .image-text-container p {
    float: left;
    font-family:Castellar, Bold Oblique;
    font-size: 30px;
    font-weight: bold;
    color:white;
    letter-spacing: 1.5px;
    margin-top: 18px;
    margin-right:180px;
  }
  
  .image-text-container b{
    float: left;
    font-family:Castellar, Bold Oblique;
    font-size: 11.8px;
    letter-spacing: 0.7px;
    margin-top: 27px;
    margin-right:15px;
  }

  .image-text-container y{
    float:center;
    color:#ff3399;
  }
  nav {
    display:flex;
    
  }
  nav h1{
    font-size: 50px;
    padding-left: 70px;
    padding-top:25px;
  }
  .square_btn{
    position: relative;
    display: inline-block;
    font-weight: bold;
    padding: 0.25em 0;
    text-decoration: none;
    color: white;   
 }
 .square_btn1{
  position: relative;
  display: inline-block;
  font-weight: bold;
  margin-left:25px;
  padding: 0.15em 0;
  text-decoration: none;
  color:#ff3399;   
}

.square_btn1:before{
  position: absolute;
  content: '';
  width: 100%;
  height: 2px;
  top:90%;
  text-align: center;
  left: 0;
  border-radius: 5px;
  background:#ff3999;
  transition: .2s;
}


.square_btn1:hover:before {
   top: -webkit-calc(100% - 1px);
   top: calc(100% - 1px);
}

 .square_btn:before{
    position: absolute;
    content: '';
    width: 100%;
    height: 4px;
    top:100%;
    left: 0;
    border-radius: 3px;
    background:white;
    transition: .2s;
 }
 

 .square_btn:hover:before {
     top: -webkit-calc(100% - 1px);
     top: calc(100% - 1px);
 }

 img {
  max-width: 120%;
  max-height: 90%;
 
}

            </style>
</head>  
<body>  
  <div class="toppane1">
  
  <z>
    <span>|</span>
    <span>India's</span>
  <span>Online</span>
  <span>Event</span>
  <span>Planning</span>
  <span>Platform</span>
   <span>|</span>
  </z>
  <z1><span>Contact Us | <i class="fa fa-phone"></i> :&nbsp;9398461160  | <i class="fa fa-envelope"></i> :&nbsp;happilyeverafter@gmail.com</z1></span>
 
  </div>
        <div class="toppane">
          <div class="image-text-container">
            <img src="logo.jpeg">
            <p>
              <span>Happily</span>
    <span>Ever</span>
  <span>After</span>
            </p>
            <b>
              <div class="w3-dropdown-click">
              <span><a href="#" class="square_btn" onclick=myFunction()><i class="fa fa-home"></i>&nbsp;Home</a></span>
                <div id="Demo" class="w3-dropdown-content w3-card-4 w3-animate-zoom">
                 <a href="overview.html" class="square_btn1">&nbsp;&nbsp;<y><i class="fa fa-newspaper-o"></i>&nbsp;Overview</y></a><br><br>
                <a href="aboutus.html" class="square_btn1">&nbsp;&nbsp;<y><i class="fa fa-users"></i>&nbsp;About US</y></a>
                </div>
              </div>
            </b>

            <b><span><a href="venues (1).html" class="square_btn"><i class="fa fa-users"></i>&nbsp;Vendors</a></span></b>
            <b><span><a href="#" class="square_btn">Events</a></span></b>
            <b><span><a href="feedback.php" class="square_btn"><i class="fa fa-pencil-square-o"></i>&nbsp;Review</a></span></b>
            <b><span><a href="booking.php" class="square_btn"><i class="fas fa-wallet "></i>&nbsp;Booking</a></span></b>
            <b><span><a href="sigin.php" class="square_btn"><i class="fa fa-user"></i>&nbsp;SignIn</a></span></b>
          </div>
        </div> 
        <div class="bottompane">
           <div class="slider"></div>
        </div> 
        <script>
          function myFunction() {
            var x = document.getElementById("Demo");
            if (x.className.indexOf("w3-show") == -1) { 
              x.className += " w3-show";
            } else {
              x.className = x.className.replace(" w3-show", "");
            }
          }
          </script>
</body>  
</html>