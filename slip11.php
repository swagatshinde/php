<!-- Q. 1) Write a PHP script to keep track of number of times the web page has been accessed (Use Session 
Tracking). -->

<?php

Session_start();

if(isset($_SESSION['pcount']))
{
    $_SESSION['pcount']+=1;
}
else{
    $_SESSION['pcount']=1;
}
echo "You have visited.".$_SESSION['pcount']."Time(s)";
?>
