<!-- 前台頁面-商品區 -->
<?php
if($_GET['type']!=0){
    $type=$Type->find($_GET['type']);
    if($type['parent']==0){
        $typebig=$type['name'];
    }else{
        $typemid=" > ".$type['name'];
        $typebig=$Type->find($type['parent'])['name'];
    }
}else{
$typebig="全部商品";
}
?>

<h2><span><?=$typebig;?></span><span><?=$typemid??'';?></span></h2> 
<div style="width:90%;margin:auto;display:flex;" class="pp">
    <div style="padding:1rem;width:35%;text-align:center">
        <img style="width:80%;" src="./icon/0403.jpg" alt="">
    </div>
    <div style="width:65%">
        <div class="tt">商品名稱</div>
        <div>價格</div>
        <div>規格</div>
        <div>簡介</div>
    </div>
</div>