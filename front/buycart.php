<!-- 前台-購物車 -->
<?php

if (isset($_GET['id'])) {
    $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}
if (!isset($_SESSION['mem'])) {
    to('?do=login');
}
//dd($_GET);
if (empty($_SESSION['cart'])) {
    echo "<h2 class='ct'>購物車目前無商品</h2?";
} else {

?>

    <h2 class="ct"><?= $_SESSION['mem']; ?></h2>
    <table class="all">
        <tr class="tt ct">
            <th>編號</th>
            <th>商品名稱</th>
            <th>數量</th>
            <th>庫存量</th>
            <th>單價</th>
            <th>小計</th>
            <th>刪除</th>
        </tr>
        <?php
        foreach ($_SESSION['cart'] as $id => $qt) {
            $row = $Goods->find($id);
        ?>

            <tr class="pp ct">
                <td><?= $row['no']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $qt; ?></td>
                <td><?= $row['qt']; ?></td>
                <td><?= $row['price']; ?></td>
                <td><?= $row['price'] * $qt; ?></td>
                <td>
                    <a href="#" onclick="delGoods(<?= $row['id']; ?>)">
                        <img src="./icon/0415.jpg" alt="">
                    </a>
                </td>
            </tr>

    <?php
        }
        echo "</table>";
    }
    ?>

    <div class="ct">
        <a href="index.php"><img src="./icon/0411.jpg" alt=""></a>
        <a href="?do=checkout"><img src="./icon/0412.jpg" alt=""></a>
    </div>
    <script>
        function delGoods(id){
            $.post("./api/del_goods.php",{id},()=>{
                location.href='?do=buycart';
            })
        }
    </script> 