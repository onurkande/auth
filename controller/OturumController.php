<?php 

if(isset($_SESSION['oturum']))
{
    if($_SESSION['oturum'])
    {
        //echo "giriş yapılı";
        header("Location:index.php");
    }
}

?>