<?php

Session_start();
if(isset($_SESSION['pcount']))
{
$_SESSION['pcount']+=1;
}
else
{
$_SESSION['pcount']=1;
}
echo"you have visited this page".$_SESSION['pcount']."Time(s).";
?>
