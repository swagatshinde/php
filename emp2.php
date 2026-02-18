<?php
session_start();

$number=$_SESSION["number"];
$name=$_SESSION["name"];
$address=$_SESSION["address"];
$salary=$_SESSION["salary"];
$da=$_SESSION["da"];
$hra=$_SESSION["hra"];

$total=$salary+$da+$hra;
?>


  <?php
     $total = $_SESSION["salary"] + $_SESSION["hra"] + $_SESSION["da"];
        echo "Eno: " . $_SESSION["e_no"] . "<br>";
        echo "Ename: " . $_SESSION["e_name"]. "<br>";
        echo "Address: " . $_SESSION["e_address"]. "<br>";
        echo "Basic: " . $_SESSION["basic"]. "<br>";
        echo "DA: " . $_SESSION["da"]. "<br>";
        echo "HRA: " . $_SESSION["hra"]. "<br>";
        echo "Total: " . $total. "<br>";
    ?>
</html>


