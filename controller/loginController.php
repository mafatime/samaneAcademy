<?php
if (isset($_POST['email']) && isset($_POST['pass']))
{
    if($_POST['email']=="liage@groupeisi.sn" && $_POST['pass']=="passer")
    {
        header("location:accueil");
    }else{
        header("location:login?error=yes");
    }
}else{
    header("location:login");
}


?>