
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="2SoVO1KafQh1fkjEjCChzr9zmTLmEceooT8qsosH">
<title>Supreme PS Shop</title>
<?php 
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";
  $growid = $_SESSION['growid']?? "";
?>
<!-- favion -->
<link rel="icon" type="image/png" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/growtopia.ico" sizes="16x16" />
<link rel="shortcut icon" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/growtopia.ico" type="image/x-icon">
<link rel="icon" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/growtopia.ico" type="image/x-icon">
<!-- link to font awesome -->
<link media="all" rel="stylesheet" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/vendors/font-awesome/css/font-awesome.min.css">
<!-- include bootstrap and custom  css -->
<link media="all" rel="stylesheet" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/css/faq-main.css">
<!-- include custom  css -->
<link media="all" rel="stylesheet" href="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/css/shop-custom.css">
<link rel="stylesheet" href="/store.css">      
 </head>
<script>
        $('#login').click(function() {      
            document.getElementById('loginforma').style.display = 'block';          
        });
        $('#sitas #discordh #admintool').click(function() {     
            document.getElementById('admintoolforma').style.display = 'block';        
        });
        </script>
<body>
<script type="text/javascript">
if (document.cookie.indexOf("gt_consent_status=1") >= 0 ) {
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36654746-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
}
</script>
<!-- main wrapper of the page -->
<div id="wrap">
  <div class="page-wrapper">
  <!-- Header -->
 <div class="header-bg">
  <header class="header" id="header">
	  	<div class="row">
		  <div class="col-md-2 col-sm-3 col-xs-3"><div class="logo"> <a href="../shop"> <img class="normal" src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/gt-header-title-logo.png" alt="Growtopia" ></a> </div></div>
		  <div class="col-md-8 col-sm-6 col-xs-6 center-align"></div>
		</div>
  </header>
  <div class="dirt">
                <div class="support-wrapper">
              <div class="collapse navbar-collapse" id="nav">
                  <ul class="nav navbar-nav navbar-left">
                      <li><a href="../faq" title="FAQs or Create a ticket" target="_blank">Support</a></li>
                      <li><a href="../" title="Offcial Website" target="_blank">Website</a></li>
                      <li><a href="../forums" title="Official Forums" target="_blank">Forums</a></li>
                  </ul>
              </div>
          </div>
        </div>
</div>
<div class="content">
    <section class="common-box ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row title-payment">
                        <div class="col-md-12 col-sm-12">
                            <p> Welcome to store, <?php $growid ?>! Please choose a pack to purchase.</p>
                        </div>
                    </div>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="B6UC3MG7PQ3A6">
<table>
<tr><td><input type="hidden" name="on0" value="In-game assets">In-game assets</td></tr><tr><td><select name="os0">
	<option value="Developer Rank">Developer Rank €22.99 EUR</option>
	<option value="Custom Role">Custom Role €19.99 EUR</option>
	<option value="Moderator Rank">Moderator Rank €14.99 EUR</option>
	<option value="VIP Rank">VIP Rank €9.99 EUR</option>
	<option value="Permanent Subscription + 40 Growtokens">Permanent Subscription + 40 Growtokens €10.99 EUR</option>
	<option value="1 Year Subscription + 25 Growtokens">1 Year Subscription + 25 Growtokens €7.99 EUR</option>
	<option value="30 Day Subscription + 15 Growtokens">30 Day Subscription + 15 Growtokens €5.99 EUR</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Discord User. Ex: #1234">Discord User. Ex: BaRe#1337</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>




    <footer id="footer">
        <div class="container text-center">
            <!-- footer logo -->
            <div class="logo"><a href="../" target="_blank"><img src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/images/ubi_icon.png"></a></div>

            <!-- copy rights -->
            <div class="copy-right"> &copy; 2021 <a href="../" target="_blank">Supreme PS</a>. All Rights Reserved.</div>
        </div>
    </footer>
</div>
<script>var base_url = '../'</script>
<!-- JQUERY LIBRARY -->
<script src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/vendors/jquery/jquery-2.1.4.min.js"></script>
<!-- jQuery easing -->
<script src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/vendors/jquery.easing/jquery.easing.1.3.min.js"></script>
<!-- boostrap javascript -->
<script src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/vendors/bootstrap/javascripts/bootstrap.min.js"></script>
<!-- match faq custom scripts -->
<script src="https://s3.eu-west-1.amazonaws.com/cdn.growtopiagame.com/website/resources/assets/js/faq-custom.js"></script>
</body>
</html>