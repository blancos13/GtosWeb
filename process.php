<?php
session_start();

if (isset($_POST['growid']) && isset($_POST['password'])) {

	function validate($data){
     $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$growid = validate($_POST['growid']);
	$password = validate($_POST['password']);

	if (empty($growid)) {
		header("Location: login?error=Username is required");
	    exit();
	}else if(empty($password)){
        header("Location: login?error=Password is required");
	    exit();
	}else{
    $fileName = 'C:/Users/Administrator/Desktop/new/save/players/_' . $growid . ".json";
    if ( file_exists($fileName) && ($fp = fopen($fileName, "rb"))!==false ) {

      $str = stream_get_contents($fp);
      fclose($fp);
      $account = 'C:/Users/Administrator/Desktop/new/save/players/_' . $growid . ".json";
      $accountfile = fopen($account, "r") or die("Unable to open file!");
      $accountcontent = fread($accountfile,filesize($account));
      $infoofaccount = json_decode($accountcontent);
      else {
        if ($password !== $infoofaccount->password) {
          header("Location: login?error=Oops, the GrowID doesn't seems valid,or the Password is wrong.Try again!");
          die();
        }
        else {
          $gemdb = 'C:/Users/Administrator/Desktop/new/save/gemdb/_' . $growid . ".txt";
          $gemsfile = fopen($gemdb, "r") or die("Unable to open file!");
          $gems = fread($gemsfile,filesize($gemdb));
          $_SESSION['growid'] = $infoofaccount->username;
          $_SESSION['premium'] = $infoofaccount->subtype;
          $_SESSION['subdate'] = $infoofaccount->subdate;
          $_SESSION['adminlevel'] = $infoofaccount->adminLevel;
          $_SESSION['code'] = $infoofaccount->code;
          $_SESSION['guild'] = $infoofaccount->guild;
          $_SESSION['email'] = $infoofaccount->email;
          $_SESSION['level'] = $infoofaccount->level;
          $_SESSION['ip'] = $infoofaccount->ip;
          $_SESSION['gems'] = $gems;
          $_SESSION['xp'] = $infoofaccount->xp;
					$_SESSION['worlds'] = $infoofaccount->worldsowned;
          header("Location: client");
          exit();
        }
      }
    }
    else {
      header("Location: login?error=Oops, the GrowID doesn't seems valid,or the Password is wrong.Try again!");
    }
	}

}else{
	header("Location: login.php");
	exit();
}
?>
