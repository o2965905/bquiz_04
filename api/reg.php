<!-- 會員註冊資料寫入資料表 -->
<?php

include_once "../base.php";

$_POST['regdate']=date("Y-m-d");
$Mem->save($_POST);


?>