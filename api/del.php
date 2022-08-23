<!-- 刪除資料 -->
<?php

include_once "../base.php";

$DB=new DB($_POST['table']);
$DB->del($_POST['id']);


?>