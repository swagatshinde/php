//how to start session
//self processing pages

<?php
session_start();
$_SESSION["username"] = "iamswagat";
$_SESSION["userid"] = "1";
?>
<html>
<body>
<?php
echo"Session Variable is set.";
?>
<a href="secondpage.php">Go to second page </a>
</body>
</html>
