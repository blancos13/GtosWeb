<html>
<link rel="stylesheet" href="towntopiaweb.css?version=69697999999">      

<?php 
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";    
?>
<!-- Modify this according to your requirement -->
<div class="main" id="sitas" style="margin-right: auto;margin-left: auto;">
<center><h3>Redirecting to login page in <span id="countdown">5</span> seconds</h3>               

<!-- JavaScript part -->
<script type="text/javascript">
    
    // Total seconds to wait
    var seconds = 6;
    
    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = "../login";
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }
    
    // Run countdown function
    countdown();
    
</script>
</div>
</div>
<?php           
  init(dirname(__FILE__));
?>
</html>
