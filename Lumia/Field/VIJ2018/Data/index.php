<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--http://talkerscode.com/webtricks/create-password-protected-webpage-using-php-html-and-css.php-->
<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'] && $_POST['user'])
{
 $pass=$_POST['pass'];
 $user=$_POST['user'];
 if($user=="sasya" && $pass=="@mrslab")
 {
  $_SESSION['password']=$pass;
  $_SESSION['user']=$user;
 }
 else
 {
  $error="Incorrect Pssword";
 }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
 unset($_SESSION['user']);
}
?>

<html>
<head>
<title>TSVIJ Data Access</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="password_style.css">
<link href = "../style/logodipu.JPG" rel="icon" type="image/JPG">
</head>
<body>

<?php
if($_SESSION['password']=="@mrslab" && $_SESSION['user']=="sasya")
{
 ?>

<div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">SASYA</span></a></h1>
          <h2>Experimental Field Campaigns | Vijayawada Test Site</h2>
		  
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="../index.html">Home</a></li>
          <li><a href="../testsite.html">Test Site</a></li>
          <li><a href="../satellitepass.html">Satellite overpasses</a></li>
          <li><a href="../resources.html">Resources</a></li>
          <li class="selected"><a href="index.php">Data Access</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner2"></div>
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h4>SASYA||TSVIJ Data Access</h4>
            <form method="post" action="" id="logout_form">
            <input type="submit" name="page_logout" value="LOGOUT">
            </form>
         </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            
			
		  </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        
 <!-- insert the page content here -->
  <!-- insert the page content here -->
   <!-- insert the page content here-->
   <br><br>
   <hr>
       <hr>
   
   <table style="width:100%; border-spacing:0;">
    <tr><th>File name</th><th>Version</th><th>Download</th></tr>
    
     <!-- item1-->
    
    
    
    <!-- item1-->
    <tr>
    <td>Sampling Locations (SITE_ID) [PXXY] XX=Sampling location; Y= Plot number.</td>
   <td>2019.v1</td>
   <td> <form action="JECAMIndia_SiteIDs.zip">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    
    
    <!-- item2-->
    <tr>
    <td>In-situ measurements (2018-Kharif)</td>
   <td>2019.v1</td>
   <td> <form action="In-situ_measurement.xlsx">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    
    <!-- item3-->
        <tr>
    <td>In-situ measurements--Read Me </td>
   <td>2019.v1</td>
   <td> <form action="Readme.txt">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    
    <!-- item3-->
        <tr>
    <td>Weather-Rainfall and Temperature</td>
   <td>2019.v1</td>
   <td> <form action="Weather.xlsx">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    
     <!-- item3-->
        <tr>
    <td>Soil Texture</td>
   <td>2019.v1</td>
   <td> <form action="Soil_shape.zip">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    
     <!-- item3-->
        <tr>
    <td>RS-2 JECAM Coverage</td><td>2019.v1</td>
   <td> <form action="RS2_JECAM.zip">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    
         <!-- item3-->
        <tr>
    <td>Vijayawada Minor Crops</td><td>2019.v1</td>
   <td> <form action="Vijayawada2018_MinorCrops.zip">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    
     <!-- item3-->
        <tr>
    <td>Field Photos</td><td>2019.v1</td>
   <td> <form action="FieldPhotos.pdf">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    <!-- item3-->
    
    <!-- item3-->
        <tr>
    <td>Technical Report--MRS2019TR02</td>
   <td>2019.v1</td>
   <td> <form action="MRS2019TR02.pdf">
    <input type="submit" class="buttontable button2tab" value="Download" />
    </form> </td>
    </tr>
    
   </table>




















 <!-- insert the page content here -->
  <!-- insert the page content here -->
   <!-- insert the page content here -->
    <!-- insert the page content here -->
    

 </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="testsite.html">Test Site</a> | <a href="insitumeasurement.html">Field measurement strategies</a> | <a href="satellitepass.html">Satellite overpasses/acquisition plan </a></p>
      <p>Copyright &copy; MRSLab | Dipankar Mandal 03-03-2018</p><p>Contact: dipankar_mandal@iitb.ac.in</p>
  </div>



 <?php
}
else
{
 ?>
 <form method="post" action="" id="login_form">
  <h2>SASYA || Data Access</h2></br>
  <label><b>Username:</b></label>
  <input type="password" name="user" placeholder="USERNAME"></br>
  <label><b>Password:</b></label>
  <input type="password" name="pass" placeholder="*******"></br>
  <input type="submit" name="submit_pass" value="LogIn">
  
  <p><font style="color:white;"><?php echo $error;?></font></p>
 </form>
 </br></br></br></br></br></br>
 <font color="#3366cc" size="2">
This site is Designed and maintained by Dipankar Mandal, IITBombay.
Copyright © MRSLab | Dipankar Mandal 16-03-2018. 
Contact: dipankar_mandal@iitb.ac.in </font>
 <?php	
}
?>

</body>
</html>
