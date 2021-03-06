<!DOCTYPE html>
<html lang='en'>
  <head> 
    <title> New Customer</title>
    <meta charset='utf-8'>
    <meta name='description' content='Books'>
    <meta name='keywords' content=''>
    <meta name='author' content='Micheal O Dowd'>
    <link href="favicon.ico" rel="icon"/> 
    <link href="favicon.ico" rel="shortcut icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="LakeSide.css">

  </head>
  <body>
  <script type = "text/javascript">

  function getLocation()
  { 
   if (navigator.geolocation)
  {
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  
  else
  {
      document.getElementById("demo").innerHTML = "Geolocation is not supported by this browser."
  }
  }  
  function showPosition(position)
  {
 
   document.getElementById("demo").innerHTML = "Latitude: " + position.coords.latitude +
   "<br>Longitude: " + position.coords.longitude;
  } 
 </script>
  
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  
   <div id="topImg">
     <img src="pics\manPic1.gif" alt="Book"  width="90" height="90">
   </div> 
    
   <div id="heading">
     <h1>O Dowd's Tyres</h1>
     <p>Ireland's Best Prices and Quality Tyres</p> 
   </div> 
    
   <div class="location">
     <p>Micheal O Dowd</p>
     <p>Cloghane,</p>
     <p>Tralee, Co Kerry.   </p>     
     <p>Phone Number: 0863900931</p>      
     <button onclick = "getLocation()" style="border-radius:10px">Your Location</button>
     <p id="demo"></p>     
   </div>   
      
   <div class="bigBox"> 
   <div id="PicBox">                                                              <!-- All pictures where got from goolges free images -->
   <div class="LakeImg"> 
     <img src="pics\mainPic5.gif" alt="Book" style="border-radius:.1em">
   </div>
   </div>

   <div class="header">
   <div id="menu"> 
   <div class="menu-container">  
     <a href="#menu" class="menu-button">Menu</a>      
   <div class="menu">     
     <a href="index.html">Home</a>
     <a href="#">Stock</a>
     <a href="CustomerOptions.html">Customers</a>
     <a href="salesOptions.html">Sale</a>
     <a href="#">Offers</a>
     <a href="stores.html">Stores</a>
     <a href="contacts.html">Contact</a>
   </div>
   </div>
   </div>
   </div>      
         
   <div class="thirdBox"> 
     <h2> New Customer </h2>
  <div class="newCustomerForm">
  <div class="phpdiv">
  <?php

$cForename = trim($_POST['Forename']);
$cSurname = trim($_POST['Surname']);
$cAddress = trim($_POST['Address']);
$PhoneNo = trim($_POST['PhoneNo']);

if ($cForename == '' or  $cSurname == ''  or $cAddress == '' or $PhoneNo=='' )                
{                                                                                     
echo("You did not complete the insert form correctly <br>");
exit();
} 
else
{
$dbcnx = mysqli_connect("localhost", "root", "", "TyreStore");     

       
// Check connection

if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}

if ($_POST['submitdetails'] == "SUBMIT") {

               //escapes quotes need to do to all strings..
$cForename = mysqli_real_escape_string($dbcnx, $cForename);
$cSurname = mysqli_real_escape_string($dbcnx, $cSurname);
$cAddress = mysqli_real_escape_string($dbcnx, $cAddress);
$PhoneNo = mysqli_real_escape_string($dbcnx, $PhoneNo);

        //Inserting data into database
$sql = "INSERT INTO customers(Forename,Surname,Address,PhoneNo) VALUES('$cForename','$cSurname', '$cAddress','$PhoneNo')";

$res = mysqli_query($dbcnx, $sql);

if ($res == 0) 
      {
        echo("<p>Error registering: " . mysqli_error(). "</p>");
      }
      
else
     {
	echo("<a href='AddCustomer.html'> Add another customer </a>");
     }
      
}mysqli_close($dbcnx);}

?>
  </div></div>
  <div class="tyrepic">
    <img src="pics\tyres20.gif" alt="Book" style="border-radius:.1em">
   </div>
   </div>
   
 
    
   
   <div class="twitter">
     <a class="twitter-timeline"  href="https://twitter.com/CengageBrain" data-widget-id="594124873095610369">Tweets by @CengageBrain</a>
     <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>      

   <div class="footer"> 
     <p>  
        Opening Hours: Mon - Fri 9am - 6pm
     </p> 
   
   <div class="fb-like" data-href="https://facebook.com/cengagebrain" data-width="100" data-layout="button_count" data-action="like" 
        data-show-faces="true" data-share="true">
     </div>
     </div>
     </div>


       </body>
</html>  