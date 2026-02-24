<?php
session_start();

if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

$correct_username='myusername';
$correct_password='mypassword';

if($username==$correct_username&&$password==$correct_password){
$_SESSION['loggedin']=true;
header('Location: welcome.php');
exit;
}else{
if(isset($_SESSION['attempts'])){
$_SESSION['attempts']--;
}else{
$_SESSION['attempts'] = 3;
}
if ($_SESSION['attempts'] <= 0){
echo "Maximum login attempts. Please try again later.";
} else {
echo "Invalid username or password. Attempts left: " .$_SESSION['attempts'];
}
}
}
?>

<form method="post">
<label for="username">Username:</label>
<input type="text" id="username" name="username" required><br><br>

<label for="password">Password:</label>
<input type="password" id="password" name="password" required><br><br>

<input type="submit" name="submit" value="Log In">
</form>

