<!-- 判斷驗證碼 -->
<?php

session_start();

if($_SESSION['ans']==$_GET['ans']){
    echo 1;
}else{
    echo 0;
}



?>