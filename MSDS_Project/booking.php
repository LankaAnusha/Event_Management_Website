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
    width:450px;margin-top:30px;height:1030px;margin-bottom:40px;
    background:#ff3399;margin-right:730px;
    box-shadow:0 0 8px rgba(250,250,250,0.6);
    opacity:0.6;
}
.container form{
    width:100%;
    text-align:center;
    padding:25px 20px;
   
}
input[type="text"] {
    color:#ff3399;font-size:15px;
  }
input[type="email"] {
    color:#ff3399;font-size:15px;
  }
  input[type="tel"] {
    color:#ff3399;font-size:15px;
  }

  input::-webkit-input-placeholder {
    font-size:12px;color:black;
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
    background:url(booking1.png);
    background-size:cover;background-position:relative;
    filter:blur(2px) brightness(15%);
}
form input{
    width:380px;
    height:30px;
    margin:3px 0;
    border:1px solid #ff3399;
    border-radius:2px;
    background:white;
    padding:0 15px;
    padding-right:45px;
    font-size:18px;
}
form button{
    margin-top:5px;
    background:#ff3399;font-family:Castellar, Bold Oblique;
    color:white;
    padding:8px 0;
    width:40%;
    font-size:10px;
    font-weight:800;height:30px;
    cursor:pointer;border-radius:12px;
    border:3px solid #f2f2f2;

}
form input[type="date"] {
    padding-right: 20px;width:190px;font-size:13px;border:2px solid white;height:35px;
}
select[name="dropdown"] {
    width:185px;height:35px;border:2px solid white;margin-top:8px;margin-left:-1.5px;font-size:13px;
  }
         </style>
        <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    </head>
    <body>
        <section></section>
        <div class="container">
          <form method="post" action="">
          <h style="font-weight:bold;font-size:20px;letter-spacing:1.5px;color:white;font-family:Castellar, Bold Oblique;">Check Vendors Availability in Hyderabad and Contact them</h><br><br>
            <div class="id">
                <input type="text" name="name" placeholder="Your Name">
                <i class="far fa-user"></i>
            </div>
            <div class="id">
                <input type="email" name="email" placeholder="Your Email" color="white">
                <i class="far fa-envelope"></i>
            </div>
            <div class="id">
            <input type="tel" name="number" placeholder="Phone Number" color="white">
            <i class="fa fa-phone"></i> </div>
            <z style="font-size:15px;padding-top:2px;">Venues&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Select date</z>
            <div class="id">
    <select name="dropdown">
        <option value="option1">Rainbow Retreat</option>
        <option value="option2">Deccan Serai Hotel</option>
        <option value="option3">Dream Valley Resorts</option>
        <option value="option4">Leonia Holistic Destination</option>
        <option value="option5">Luminious One Continent Hotel</option>
        <option value="option6">Fort Grand</option>
        <option value="option7">Amogham Banquet Hotel</option>
        <option value="option8">Beach House</option>
    </select>
    <input type="date" name="date" placeholder="select the date">
</div><br>
<b style="border: solid #330099;border-width:15px;margin-top:20px;color:#ff3399;font-size:12px;background:#330099;"><i class="fa fa-check-square-o">
</i>&nbsp;&nbsp;Available</b><br><br>
<button name="submit"><i class="far fa-envelope"></i>&nbsp;&nbsp;Send Message</button>&nbsp;
<button name="submit"><i class="fas fa-phone"></i>&nbsp;&nbsp;Contact Them</button><br><br>
<z style="font-size:15px;padding-top:2px;"> Decoration Planners
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Select date</z>
            <div class="id">
    <select name="dropdown">
        <option value="option1">Meragi</option>
        <option value="option2">Weddings by Tammali</option>
        <option value="option3">About the Decor</option>
        <option value="option4">Var Vadhu</option>
        <option value="option5">Gold Feather Weddings</option>
        <option value="option6">Madhaniya Designs Studio</option>
        <option value="option7">4r Together Events</option>
        <option value="option8">Shrusti Elegance</option>
    </select>
    <input type="date" name="date" placeholder="select the date">
</div><br>
<b style="border: solid #330099;border-width:15px;margin-top:20px;color:#ff3399;font-size:12px;background:#330099;"><i class="fa fa-check-square-o">
</i>&nbsp;&nbsp;Available</b><br><br>
<button name="submit"><i class="far fa-envelope"></i>&nbsp;&nbsp;Send Message</button>&nbsp;
<button name="submit"><i class="fas fa-phone"></i>&nbsp;&nbsp;Contact Them</button><br><br>
<z style="font-size:15px;padding-top:2px;">Catering Services
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Select date</z>
            <div class="id">
    <select name="dropdown">
        <option value="option1">RK Caterers</option>
        <option value="option2">Tasty Spread</option>
        <option value="option3">Fast Caterers</option>
        <option value="option4">AV Caterers</option>
        <option value="option5">Subham Catering Services</option>
        <option value="option6">Gaurav Caterers</option>
        <option value="option7">The Cake Room</option>
        <option value="option8">Dendi Yashwanth Reddy</option>
    </select>
    <input type="date" name="date" placeholder="select the date">
</div><br>
<b style="border: solid #330099;border-width:15px;margin-top:20px;color:#ff3399;font-size:12px;background:#330099;"><i class="fa fa-check-square-o">
</i>&nbsp;&nbsp;Available</b><br><br>
<button name="submit"><i class="far fa-envelope"></i>&nbsp;&nbsp;Send Message</button>&nbsp;
<button name="submit"><i class="fas fa-phone"></i>&nbsp;&nbsp;Contact Them</button><br><br>
<z style="font-size:15px;padding-top:2px;">Entertainment
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; Select date</z>
            <div class="id">
    <select name="dropdown">
        <option value="option1">DJ Pradeep Smiley</option>
        <option value="option2">Avaes Sheik Choreography</option>
        <option value="option3">Anchor Krishnaveny</option>
        <option value="option4">Band Nakshatra</option>
        <option value="option5">DJ Amit Saxena</option>
    </select>
    <input type="date" name="date" placeholder="select the date">
</div><br>
<b style="border: solid #330099;border-width:15px;margin-top:20px;color:#ff3399;font-size:12px;background:#330099;"><i class="fa fa-check-square-o">
</i>&nbsp;&nbsp;Available</b><br><br>
<button name="submit"><i class="far fa-envelope"></i>&nbsp;&nbsp;Send Message</button>&nbsp;
<button name="submit"><i class="fas fa-phone"></i>&nbsp;&nbsp;Contact Them</button><br><br>
          </form>
        </div>
    </body>
</html>