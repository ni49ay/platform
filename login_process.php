<!-- filepath: /c:/Users/USER/Desktop/platform/login_process.php -->
<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// 假設這裡有一個用戶名和密碼的數據庫查詢
if ($username == 'admin' && $password == 'password') {
  $_SESSION['loggedin'] = true;
  header('Location: index.html');
} else {
  echo 'Invalid username or password';
}
?>