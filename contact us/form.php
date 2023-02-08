<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $file = fopen("form-data.txt", "a");
  $data = "$name ($email): $message\n";
  fwrite($file, $data);
  fclose($file);
}
?>
