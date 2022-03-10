<link rel="stylesheet" href="/towntopiaweb.css">      

      <?php echo "<link rel='stylesheet' href='/style/login.css?version=3'>";
        echo "<center><div id='loginforma' class='modal' style='";
        if ($force) {
            echo "display:block;";
        } else {
            echo "display:none;";
        }
        echo "'>
        <div class='modal-content' id='mod' style='width:400px;";
        if (!$force) echo "-webkit-animation-name: animatetop;-webkit-animation-duration: 0.4s;animation-name: animatetop;animation-duration: 0.4s";
        echo "'>
        <div style='padding-bottom: 11px;'>
          <div class='modal-header' style='height:50px;'>
            <h3 style='margin-top:10px;'>Login with your GrowID</h3>
          </div>
          </div>
          
          <div class='modal-body'>
          <div style='text-align:left;width:200px'><form action='../' method='post'>  
          <div style='padding-bottom: 11px;'>      
            <label for='fname'>GrowID:</label><br>
            <input type='text' style='width:100%' id='tankidname' name='tankidname' "; if (isset($_POST["tankidname"])) echo "value='".$_POST["tankidname"]."'"; 
            echo "><br>     
          </div>
          <div style='padding-bottom: 11px;'>    
            <label for='fpass'>Password:</label><br>
            <input type='password' style='width:100%' id='tankidpass' name='tankidpass' "; if (isset($_POST["tankidpass"])) echo "value='".$_POST["tankidpass"]."'"; 
            echo "><br>   
          </div>
            <div class='field field-checkbox padding-bottom--24 flex-flex align-center'>
                <label for='checkbox' style='padding-bottom: 6px;'>
                    <input type='checkbox'>Remember me
                </label>
            </div>
            <center>
            <div class='field'><input type='submit' value='Login into website'></div></center>
          </form></div>
          </div>
        </div>  
      </div></center>
      <script>
        var modal = document.getElementById('loginforma');
        var span = document.getElementsByClassName('close')[0];         
        span.onclick = function() {
            modal.style.display = 'none';
            document.getElementById('mod').style.animationDuration = '0.4s'
            document.getElementById('mod').style.animationName = 'animatetop'
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
                document.getElementById('mod').style.animationDuration = '0.4s'
                document.getElementById('mod').style.animationName = 'animatetop'
            }
        }
        </script>";
?>