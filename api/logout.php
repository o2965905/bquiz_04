<!-- 登出 -->
<?php

session_start();

//簡短版本
//unset($_SESSION[$_GET['table']]);

switch($_GET['table']){
    case 'mem':
        unset($_SESSION['mem']);
    break;
    case 'admin':
        unset($_SESSION['admin']);
    break;
}



?>