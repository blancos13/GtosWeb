<html>
<head>
<meta charset="UTF-8">                                                                              
<link rel="icon" href="/favicon.ico">      
<meta name="theme-color" content="#45489a">
<meta name="viewport" content="width=device-width, initial-scale=0.85">                          
<link rel="stylesheet" href="/towntopiaweb.css?version=143">      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>            
<title><?php 
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";    
  echo "Admin tools";
?></title>
</head>
<body>


<?php
  init(dirname(__FILE__));?>
  <script>
        $('#login').click(function() {      
            document.getElementById('loginforma').style.display = 'block';          
        });
        $('#sitas #discordh #admintool').click(function() {     
            document.getElementById('admintoolforma').style.display = 'block';        
        });
        </script><?php
  if (!isset($_SESSION["adminLevel"]) || isset($_SESSION["adminLevel"]) && $_SESSION["adminLevel"] < 1) {
    die("<center><div class='main' style='height:150px;'>
        <h1 style='margin-bottom:10'>Illegal access request</h1>                  
        <div class='main' style='margin-top:0px;'><h4>
            <b style='color:red'>You don't have permissions to view this page!!</b>
            </h4></div>
        <br>
    </div></center>"
);
  }
?>

<div class="main" id="sitas" style="margin-right: auto;margin-left: auto;">
<center><h1 style="margin-bottom:10">GTOS Admin tools</h1>
<h4>
</h4>
<h4>                     
<?php
    $failai = array_slice(scandir(get_save."players"), 2);     
    $w_failai = array_slice(scandir(get_save."worlds"), 2); 
    if (isset($_POST["nick"])) {   
        $target = strtolower($_POST["nick"]);      
        if (file_exists(get_save."players/_".$target.".json")) {
            echo "Alts found: ";
                        $victim = json_decode(get_file(get_save."players/_".$target.".json"));      
                        $rezultatas = array();             
                        for ($i = 0; $i < sizeof($failai); $i++) {
                            $informacija = json_decode(get_file(get_save."players/".$failai[$i]));  
                            if ($informacija->{'ip'} == $victim->{'ip'} || $informacija->{'mac'} == $victim->{'mac'} && $informacija->{'mac'} != "02:00:00:00:00:00" || $informacija->{'rid'} == $victim->{'rid'} && $informacija->{'rid'} != "" && $informacija->{'rid'} != "none" || $informacija->{'gid'} == $victim->{'gid'} && $informacija->{'gid'} != "" && $informacija->{'gid'} != "none" || $informacija->{'vid'} == $victim->{'vid'} && $informacija->{'vid'} != "" && $informacija->{'vid'} != "none" || $informacija->{'aid'} == $victim->{'aid'} && $informacija->{'aid'} != "" && $informacija->{'aid'} != "none") {         
                                $rezultatas[] = $informacija->{'username'};
                            }
                        } echo implode(', ', $rezultatas);
                        send_log("New alt scan", $_POST["nick"], implode(', ', $rezultatas));
                    } else {
                        echo "$target does not exist in our database!";
                    }
                }
    
    
                if (isset($_POST["itemid"])) {              
                    if (!is_numeric($_POST["itemid"])) { /*surasti itemo id is datos*/    
                        echo "Not an number";
                    } else 
                    echo "Items found: ";
                    {
                        $rezultatas = array();                                                        
                        for ($i = 0; $i < sizeof($failai); $i++) {
                            $informacija = json_decode(get_file(get_save."players/".$failai[$i]), true);  
                            foreach($informacija['inventory']['items'] as $item) { 
                                if ($item['itemid'] == $_POST["itemid"]) {
                                    $rezultatas[] = $informacija['username']." (".$item['quantity'].")";
                                    break;
                                }
                            }
                        } echo implode(', ', $rezultatas);
                        send_log("New inventory scan", $_POST["itemid"], implode(', ', $rezultatas));
                    }
                }
    
    
                if (isset($_POST["w_itemid"])) {              
                    if (!is_numeric($_POST["w_itemid"])) { /*surasti itemo id is datos*/    
                        echo "Not an number";
                    } else {
                        echo "Items found: ";
                        $rezultatas = array();                                                        
                        for ($i = 0; $i < sizeof($w_failai); $i++) {            
                            $informacija = json_decode(get_file(get_save."worlds/".$w_failai[$i]), true);
                            foreach($informacija['dropped'] as $item) { 
                                if ($item['id'] == $_POST["w_itemid"]) {
                                    $rezultatas[] = $informacija['name']." (".$item['c'].")";
                                }
                            }
                        } echo implode(', ', $rezultatas);
                        send_log("New world drop scan", $_POST["w_itemid"], implode(', ', $rezultatas));
                    }
                }
    
    
                if (isset($_POST["s_itemid"])) {              
                    if (!is_numeric($_POST["s_itemid"])) { /*surasti itemo id is datos*/    
                        echo "Not an number";
                    } else {
                        echo "Items found: ";
                        $rezultatas = array();                                                        
                        for ($i = 0; $i < sizeof($w_failai); $i++) {            
                            $informacija = json_decode(get_file(get_save."worlds/".$w_failai[$i]), true);
                            foreach($informacija['tiles'] as $item) { 
                                if ($item['fg'] == 5638 && $item['mid'] == $_POST["s_itemid"]) { //magplant           
                                    $rezultatas[] = $informacija['name']." (".$item['mc'].") (magplant)";
                                }
                            }
                        } echo implode(', ', $rezultatas);
            send_log("New world stuff scan", $_POST["s_itemid"], implode(', ', $rezultatas));
        }
    }
?></h4>
<div class="main" id="discordh" style="margin-right: 5px;margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Alt finder</h3>
<form style='width: 100%;' action="https://gtos2.com/admin.php" method="post">
<p style="color:red"><b>Find alt accounts of a player</b></p>
<label for="fname">Username:</label>
<input style='width: 100px; margin-bottom:15px;' type="text" id="nick" name="nick">
<br><input type="submit" value="find alt">
</form>
</div><div class="main" id="discordh" style="margin-right: 5px;margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Inventory finder</h3>
<form style='width: 100%;' action="https://gtos2.com/admin.php" method="post">
<p style="color:red"><b>Search for an item in every player inventory</b></p>
<label for="fname">Item ID:</label>
<input style='width: 100px; margin-bottom:15px;' type="text" id="itemid" name="itemid">
<br><input type="submit" value="find item">
</form>
</div><div class="main" id="discordh" style="margin-right: 5px;margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;">
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Drop finder</h3>
<form style='width: 100%;' action="https://gtos2.com/admin.php" method="post">
<p style="color:red"><b>Warning world drop scan can take up to 3 minutes</b></p>
<label for="fname">Item ID:</label>
<input style='width: 100px; margin-bottom:15px;' type="text" id="w_itemid" name="w_itemid">
<br><input type="submit" value="find item">
</form>
</div><div class='main' id='discordh' style='margin-right: 5px;margin-top:10px;height:220px;width:200px;display: inline-block;margin-bottom:0;'>
<h3 style='margin-top: 0;border-bottom: 1px solid rgba(0,0,0,.125);border-radius: .25rem;'>Stuff finder</h3>
<form style='width: 100%;' action="https://gtos2.com/admin.php" method="post">
<p style="color:red"><b>Warning world stuff scan can take up to 3 minutes</b></p>
<label for="fname">Item ID:</label>
<input style='width: 100px; margin-bottom:15px;' type="text" id="s_itemid" name="s_itemid">
<br><input type="submit" value="find item">
</form></div></center>
</h4>
<br>
</div>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7dd1678b3da650f11286f7df-|49" defer=""></script></body>
</html>