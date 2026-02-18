<?php
session_start();

$_SESSION["number"]=$_POST["number"];
$_SESSION["name"]=$_POST["name"];
$_SESSION["address"]=$_POST["address"];

?>

<form action="emp2.php" method="post">
<label for="salary">Employee Salary : </label>
<input type="number" id="salary" name="salary" required> <br><br>

<label for="da">Enter DA : </label> 
<input type="number" id="da" name="da" required> <br><br>

<label for="hra">Enter HRA : </label> 
<input type="number" id="hra" name="hra" required> <br><br>

<input type="submit" value="NEXT">
</form> 


