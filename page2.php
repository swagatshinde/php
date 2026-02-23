<?php
session_start();
if (isset($_POST['submit'])) {
$basic = $_POST['basic'];
$da = $_POST['da'];
$hra = $_POST['hra'];
$_SESSION["basic"] = $basic;
$_SESSION["da"] = $da;
$_SESSION["hra"] = $hra;
header('Location: page3.php');
}
?>
<form method="post">
<label for="basic">Basic Salary:</label>
<input type="basic" id="basic" name="basic" required><br><br>
<label for="da">DA:</label>
<input type="da" id="da" name="da" required><br><br>
<label for="hra">HRA:</label>
<input type="hra" id="hra" name="hra" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
