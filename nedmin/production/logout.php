<?php 

session_start();

//session_destroy fonk. ile girişteki session bilgilerini siliyoruz.
session_destroy();
header("Location:login.php?durum=exit")


 ?>