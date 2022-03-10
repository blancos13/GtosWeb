<title><?php 
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";    
  echo "Password Recovery";
?></title>
<link rel="stylesheet" href="/towntopiaweb.css?version=143"> 
<body>

<?php
  init(dirname(__FILE__));
?>
<div class="main" id="sitas" style="margin-right: auto;margin-left: auto;">
<center>
<section class="contacts2 cid-snIZkXmqfC" id="contacts2-a">
    <div class="container">
        <h2 class="mbr-section-title align-center mbr-fonts-style mbr-white mbr-bold display-2">Reset Password</h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style mbr-white mbr-regular mbr-pt-2 display-7">Lost your Password? You can reset it here.</h3>

        <div class="mbr-row mbr-jc-c mbr-pt-4">
            <div class="mbr-col-lg-7 mbr-col-md-10 mbr-col-sm-12">
                <form action="resetpass" method="post">
                  <h4 class="mbr-section-subtitle align-center"<label>GrowID:</label>
                  <input type="text" name="growid" placeholder="GrowID" required></h4>
		              <h4 class="mbr-section-subtitle align-center"<label>Email Address:</label>
                  <input type="email" name="email" placeholder="Email Address" required></h4>
                  <h4 class="mbr-section-subtitle align-center"<label>New Password:</label>
                  <input type="password" name="password" placeholder="New Password" required></h4>
                  <br>
                  <br>
                  <div style="text-align: center;">
                    <button type="submit" style="border-radius: 5px; border-width: 0px; background-color: #00c45f; color: white; padding: 15px; font-size: 20px; padding-left: 30px; padding-right: 30px;" class="submitbuttonhover">Reset Now</button>
                  </div>
                  <?php if (isset($_GET['error'])) { ?>
                 		<p style="background: #F2DEDE;color: #A94442;padding: 10px;border-radius: 5px;margin: 20px auto;"><?php echo $_GET['error']; ?></p>
                  <?php } ?>
                  <?php if (isset($_GET['success'])) { ?>
                 		<p style="background: #91ffae;color: #44a65e;border-color: color: #44a65e;border-width: 2px; border-style: solid;padding: 10px;width: 95%;border-radius: 5px;margin: 20px auto;"><?php echo $_GET['success']; ?></p>
                  <?php } ?>
                </form>
            </div>
        </div>
    </div>
</section>