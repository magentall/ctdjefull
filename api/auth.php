<?php
$_POST = json_decode(file_get_contents('php://input'), true);
if (isset($_POST)&& !empty($_POST)){
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username == 'admin' && $password == 'admin'){
    ?>
{
  "success": true,
  "secret": "secret admin"
}
   <?php
 }else{
   ?>
{
  "success": false,
  "message": "Invalid credentials"
}
   <?php
 }
} else {
  //var_dump($_POST);
  ?>
{
  "success": false,
  "message": "Only post access acceptd"
}
  <?php
}
?>