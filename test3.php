<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>
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

</body>
</html>
