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
<link rel="icon" href="favicon.ico">      
<meta name="theme-color" content="#45489a">
<meta name="viewport" content="width=device-width, initial-scale=0.85">                          
<link rel="stylesheet" href="towntopiaweb.css?version=69697999999">      
<link rel="stylesheet" href="discord/discordInvite.css?version=18">   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
<title><?php 
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";    
  $obj = json_decode(get_file_array(get_gtps."config.json", 0));      
  echo "How to play ".$obj->{'server_name'}." by Sebia";
?></title>
</head>
<body>

<?php
  init(dirname(__FILE__));
?>

<script src="discord/discordInvite.js?version=9"></script>      
<script>
  discordInvite.init({
  inviteCode: '<?php
    $invite_link_array = explode("/", $obj->{'server_discord'});
    echo $invite_link_array[4];
  ?>',
  title: '<?php echo $obj->{'server_name'} ?>',
});
discordInvite.render();
</script>
<center><div class="main" style="height:350px;">
<h1 style="margin-bottom:10"><?php echo $obj->{'server_name'} ?> Private Server</h1>                  
<div class="main" style="margin-top:0px;"><h4><?php
    echo "Online Players-> [<b>".get_file_array(get_gtps."online_count.txt", 0)."</b>]<br>";
    $fi = new FilesystemIterator(get_save."players/", FilesystemIterator::SKIP_DOTS);                  
    $players_count = iterator_count($fi);
    echo "Total players -> [<b>$players_count</b>]<br>";
    $fi = new FilesystemIterator(get_save."worlds/", FilesystemIterator::SKIP_DOTS);         
    $worlds_count = iterator_count($fi);
    echo "Total worlds -> [<b>$worlds_count</b>]<br>";                    
    $gems = 0;      
    $richest = "";      
    $today_active = "";     
    $today_time = 0;      
    $most_active = "";
    $most_time = 0;
    $files = array_slice(scandir(get_save."gemdb"), 2);        
    for ($i = 0; $i < sizeof($files); $i++) {
        $obj = json_decode(get_file(get_save."players/".str_replace(".txt", ".json", $files[$i])));
        if ($obj->{'adminLevel'} == 6 || $obj->{'isBanned'} || $obj->{'timeBanned'} > 0) continue; /*exclude creators and banned peps*/
        $active_today = get_file_array(get_save."playtime/".$files[$i], 0);
        if ($active_today > $today_time) {
          $today_time = $active_today;
          $today_active = $files[$i];
        }
        $active_ever = get_file_array(get_save."playtimeglobal/".$files[$i], 0);
        if ($active_ever > $most_time) {
          $most_time = $active_ever;
          $most_active = $files[$i];
        }
        $gem_count = get_file_array(get_save."gemdb/".$files[$i], 0);
        if ($gem_count > $gems) {
          $gems = $gem_count;
          $richest = $files[$i];
        }
    }
    echo "Richest player -> [<b>".str_replace(".txt", "", str_replace("_", "", $richest))." $gems gems</b>]<br>";
    echo "Most active player of today -> [<b>".str_replace(".txt", "", str_replace("_", "", $today_active))." $today_time min</b>]<br>";
    echo "Most active player ever -> [<b>".str_replace(".txt", "", str_replace("_", "", $most_active))." $most_time min</b>]";
?></h4></div>
<br>
<center><div id="discordInviteBox"></div></center>
<br>
</div></center>
</body>
</html>