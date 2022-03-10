<html>
<head>
<meta charset="UTF-8">    
<html lang="en" data-theme="light">                                                                          
<meta name="description" content="Tutorial how to play private growtopia server from all over the world To connect to GTOS takes just two minutes and doesn't require any technical skills.">     
<meta name="keywords" content="Private Growtopia, GTPS, Growtopia Server, Growtopia Private Server, gtos2.com., private growtopia, Sebia, Almantas Vorobjovas, Supreme private, SupremePS">
<meta name="author" content="BaRe">
<meta property="og:url" content="http://localhost/">                            
<meta property="og:type" content="article">     
<meta property="og:title" content="GTPS x | Home page">
<meta property="og:description" content="GTPS x main page">            
<meta property="og:image" content="https://gtosprivate.com/img/pagepreview.jpg">
<link rel="icon" href="/favicon.ico">      
<meta name="theme-color" content="#45489a">
<meta name="viewport" content="width=device-width, initial-scale=0.85">                          
<link rel="stylesheet" href="/towntopiaweb.css?version=143">      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>            
<title><?php 
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";    
  echo "GTPS x | Home page";
?></title>
</head>
<body>

<?php
  init(dirname(__FILE__));
?>
<div class="main" id="sitas" style="margin-right: auto;margin-left: auto;">
<center><h1 style="margin-bottom:10">GTPS x Private Server</h1>               
<script>
        $('#login').click(function() {      
            document.getElementById('loginforma').style.display = 'block';          
        });
        $('#sitas #discordh #admintool').click(function() {     
            document.getElementById('admintoolforma').style.display = 'block';        
        });
        </script>
<div class="main" id="discordh" style="margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Join our discord</h3>
<a href='https://discord.gg/XJeEpTDdfA' target="_blank" rel="noopener noreferrer"><div class="button" id="discord"></div></a></div>
<div class="main" id="discordh" style="margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Purchase ranks</h3>
<a href='/store.php'><div class="button" id="store"></div></a></div>            
<div class="main" id="discordh" style="margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Verify your device</h3>
<a href='/verify.php'><div class="button" id="verify"></div></a></div>
<div class="main" id="discordh" style="margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Tutorial</h3>
<a href='/tutorial.php'><div class="button" id="tutorial"></div></a></div>
<?php
    if (isset($_SESSION["adminLevel"]) && $_SESSION["adminLevel"] >= 1) {
        echo "<div class='main' id='discordh' style='margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;'>
        <h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Admin tools</h3>
        <a href='/admin.php'><div class='button' id='admin'></div></a></div>";                                     
    }
?>
</center>

</h4>
<br>
</div>
</body>
</html>