<html>
<head>
<meta charset="UTF-8">                                                                              
<link rel="icon" href="favicon.ico">      
<meta name="theme-color" content="#45489a">
<meta name="viewport" content="width=device-width, initial-scale=0.85">                          
<link rel="stylesheet" href="towntopiaweb.css?version=69697999999">      
<link rel="stylesheet" href="discord/discordInvite.css?version=18">   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
<title><?php 
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";    
  echo "Device verification";
?></title>
</head>
<body>

<?php           
  init(dirname(__FILE__));
?>
<?PHP
if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
 //check for ip from share internet
 $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
 // Check for the Proxy User
 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
 $ip = $_SERVER["REMOTE_ADDR"];
}
?>
  <script>
        $('#login').click(function() {      
            document.getElementById('loginforma').style.display = 'block';          
        });
        $('#sitas #discordh #admintool').click(function() {     
            document.getElementById('admintoolforma').style.display = 'block';        
        });
        </script>
<center><div class="main">            
<h1 style="margin-bottom:10">Device verification</h1>                  
<div class="main" style="margin-top:0px;"><h4><?php
    if (file_exists(get_save."verify/$ip.txt")) {
        echo "<b style='color:green'>Your device and location is already verified to create GrowID in GTOS!</b>";
    } else {
        $failai = array_slice(scandir(get_save."players"), 2);     
        $rezultatas = array();                                                   
        for ($i = 0; $i < sizeof($failai); $i++) {                                   
            $informacija = json_decode(get_file(get_save."players/".$failai[$i]));
            if ($informacija->{'isBanned'} && $informacija->{'ip'} == $ip  || $informacija->{'timebanned'} > 0 && $informacija->{'ip'} == $ip) {
                $rezultatas[] = $informacija->{'username'};
            }
        } if (!empty($rezultatas)) {
            echo "<b style='color:red'>Failed to verify device because banned accounts were found: ".implode(', ', $rezultatas)."</b>";
        } else {
            file_put_contents(get_save."verify/$ip.txt", $ip);
            echo "<b style='color:green'>Your device and location ($ip) is now verified to create GrowID in GTOS!</b>";
        }
    }
?></h4></div>
<br></div></center>
</body>
</html>