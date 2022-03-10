<?php
  require $_SERVER['DOCUMENT_ROOT']."/config/constants.php";    
$growid = $_POST['growid'];
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($growid)) {
  header("Location: password");
    exit();
}else if(empty($email)){
      header("Location: password");
    exit();
}else{
  $fileName = get_save.'players/_' . $growid . ".json";
  if ( file_exists($fileName) && ($fp = fopen($fileName, "rb"))!==false ) {

    $str = stream_get_contents($fp);
    fclose($fp);
    $account = get_save.'players/_' . $growid . ".json";
    $accountfile = fopen($account, "r") or die("Unable to open file!");
    $accountcontent = fread($accountfile,filesize($account));
    $infoofaccount = json_decode($accountcontent);
    if ($email !== $infoofaccount->email) {
      header("Location: recovery.php?error=Sorry, the email doesn't match to this GrowID.");
      die();
    }
      else {
          $infoofaccount->password = $password;
          $json_object = json_encode($infoofaccount);
          file_put_contents(get_save."players/_" . $growid . ".json", $json_object);
          header("Location: recovery.php?success=Hey, $growid. Your password got changed as $password. Write it down.");   
	  header("Location: recovery.php?success=Hey, $growid. Your password got changed as $password. Write it down.");                
	  die();
    }
  }
  else
  {
    header("Location: recovery.php?error=Oops,The GrowID you entered doesn't seems exist!");
    die();
  }
}
?>
