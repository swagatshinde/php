<?php
session_start();
?>
<html>
<?php
$total=$_SESSION["basic"]+$_SESSION["hra"]+$_SESSION["da"];
echo "Employee number : ".$_SESSION["number"] . "<br>";
echo "Employee name : ".$_SESSION["name"]. "<br>";
echo "Address: " . $_SESSION["address"]. "<br>";
echo "Basic: " . $_SESSION["basic"]. "<br>";
echo "DA: " . $_SESSION["da"]. "<br>";
echo "HRA: " . $_SESSION["hra"]. "<br>";
echo "Total: " . $total. "<br>";
?>
</html>
