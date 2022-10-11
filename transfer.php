<!DOCTYPE html>
<?php
$name = $_SERVER['HTTP_X_REPLIT_USER_NAME'];
$roles = $_SERVER['HTTP_X_REPLIT_USER_ROLES'];
$id = $_SERVER['HTTP_X_REPLIT_USER_ID'];
function loginSend() {
  $time = $_POST['time'];
  $msg = $_POST['msg'];
  return $time." ".$name."：".$msg;
}
if ($name && $roles && $id) {
  $time = $_POST['time'];
  $content = $_POST['msg'];
  $msg = $time." ".$name."：".$content;
  if($msg == '') {exit;}

  $sample = fopen("messages.dat","a");
  $input = $msg.'​͘';
  fwrite($sample, $input);
  fclose($sample);
}
?>