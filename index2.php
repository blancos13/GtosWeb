<html>
<head>
<meta charset="UTF-8">                                                                              
<meta name="description" content="Tutorial how to play private growtopia server from all over the world To connect to GTOS takes just two minutes and doesn't require any technical skills.">     
<meta name="keywords" content="Private Growtopia, GTPS, Growtopia Server, Growtopia Private Server, gtosprivate.com., private growtopia, Sebia, Almantas Vorobjovas, GTOS private, GTOS">
<meta name="author" content="Sebia">
<meta property="og:url" content="https://gtosprivate.com">                            
<meta property="og:type" content="article">     
<meta property="og:title" content="How to play GTOS by Sebia">
<meta property="og:description" content="Tutorial how to play growtopia private server">            
<meta property="og:image" content="https://gtosprivate.com/img/pagepreview.jpg">
<link rel="icon" href="/favicon.ico">      
<meta name="theme-color" content="#45489a">
<meta name="viewport" content="width=device-width, initial-scale=0.85">                          
<link rel="stylesheet" href="/towntopiaweb.css?version=143">      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>            
<title><?php 
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";    
  echo "How to play GTPS x by BaRe#1337";
?></title>
</head>
<body>

<?php
  init(dirname(__FILE__));
?>
<div class="main" id="sitas" style="margin-right: auto;margin-left: auto;">
<center><h1 style="margin-bottom:10">GTPS x</h1>               

<div class="main" id="discordh" style="margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Join our discord</h3>
<a href='https://discord.gg/gtos' target="_blank" rel="noopener noreferrer"><div class="button" id="discord"></div></a></div>
<div class="main" id="discordh" style="margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Purchase ranks</h3>
<a href='/store.php'><div class="button" id="store"></div></a></div>            
<div class="main" id="discordh" style="margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Verify your device</h3>
<a href='/verify.php'><div class="button" id="verify"></div></a></div>

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