<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {display:flex;
     margin:30px 45px; 
     background: linear-gradient(to right, #ff416c, #ff4b2b);
    
    }

*{ box-sizing: border-box; 
    padding:0; 
    margin:0;
}

input[type=text], select, textarea, input[type=email] {
  width: 100%;
  padding: 12px;
  border: none;
  border-bottom: 2px solid #000;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background:transparent;
}

h1{
    text-align:center;
    font-family: monospace;
    font-size:22px;
    padding-bottom:3ch;
}

form{
    width:50%;
    margin:0 auto;
    color:#000;
}

input[type=submit]{
  background: linear-gradient(to right, #cb356b, #bd3f32);
  color: white;
  padding: 12px 30px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin:0 auto;
  display:flex;
  font-size:20px;
  font-family:serif;
}

input[type=submit]:hover {
  background: #000;
}

.container {
  border-radius: 5px;
  background-color:#fff;
  padding: 20px;
  margin:0 auto;
}

@media only screen and (max-width: 600px) {
  body {
    background: linear-gradient(to right, #ff416c, #ff4b2b);
  }

  form{
      width:100%;
  }
}
</style>
</head>
<body>
<div class="container">
    <h1>Contact Us</h1>
    <form action="" method="POST">
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" placeholder="Enter your name..">

    <label for="email">E-Mail</label>
    <input type="email" id="ress" name="email" placeholder="Enter your email address..">

    <label for="profession">Profession</label>
    <select id="fession" name="pro">
      <option value="Banker">Banker</option>
      <option value="None of these">None of these</option>
      <option value="Accountant">Accountant</option>
      <option value="Designer">Designer</option>
      <option value="Developer">Developer</option>
      <option value="Associate">Associate</option>
      <option value="Manager">Manager</option>
      <option value="Doctor">Doctor</option>
    </select>

    <label for="Message">Message</label>
    <textarea id="subject" name="message" placeholder="Your Message Here..." style="height:200px"></textarea>
    <input type="submit" name="submit" value="Shoot your message">
  </form>
</div>
</body>
</html>
<?php
  if(isset($_POST['submit']))
  {
  $fn = $_POST['fullname'];
  $em = $_POST['email'];
  $pr = $_POST['pro'];
  $ms = $_POST['message'];
   
  if($fn!="" && $em!="" && $pr!="" && $ms!="")
  {
  
    $query =  "INSERT into contact values ('$fn', '$em', '$pr', '$ms')";
    $data = mysqli_query($conn, $query);

    if($data)
    {   
      echo '<script>alert("Your message has been sent successfully")</script>';
    }
  } 

  else
 {
     echo "<p style='padding-left:75ch; padding-top:6ch; font-family:monospace; font-size:140%; color:#ff6b6b;'>"."All Fields are required!";
 }

}
?>