<?php
session_start();
if(isset($_POST['submit'])){
$number=$_POST['number'];
$name=$_POST['name'];
$address=$_POST['address'];
$_SESSION["number"]=$number;
$_SESSION["name"]=$name;
$_SESSION["address"]=$address;
header('Location: page2.php');
exit;
}
?>
<form method="post">
<label for="number">Employee Number :</label>
<input type="number" id="number" name="number" required><br><br>
<label for="name">Employee Name:</label>
<input type="text" id="name" name="name" required><br><br>
<label for="e_address">Employee Address:</label>
<input type="text" id="address" name="address" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
