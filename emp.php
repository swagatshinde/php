<?php
session_start();
?>


<form action="emp1.php" method="post">
<label for="number">Employee Number : </label>
<input type="number" id="number" name="number"> <br><br>

<label for="name">Employee Name : </label> 
<input type="name" id="name" name="name"> <br><br>

Employee Address : <textarea name="address" id="address"></textarea><br><br>

<input type="submit" value="NEXT">
</form> 
