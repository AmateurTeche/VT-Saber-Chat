<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .replit-auth-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
  </head>
  <body>
    <div class="bg"></div>
    <script src="js/bg.js"></script>
    <div style="color: white;">
      <?php
$name = $_SERVER['HTTP_X_REPLIT_USER_NAME'];
$roles = $_SERVER['HTTP_X_REPLIT_USER_ROLES'];
$id = $_SERVER['HTTP_X_REPLIT_USER_ID'];
if ($name && $roles && $id) {
  echo 'Hello, '.$name.'!';
}
?>
    </div>
    <script src="https://auth.util.repl.co/script.js" authed="window.location.href = '../';"></script>
  </body> 
</html>