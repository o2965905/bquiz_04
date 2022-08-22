<!-- 前台-會員登入 -->
<h2>第一次購物</h2>
<a href="?do=reg"><img src="/icon/0413.jpg" alt=""></a>
<h2>會員登入</h2>
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
        <?php
            $a=rand(10,99);
            $b=rand(10,99);
            echo $a . " + " . $b . " = ";
            $_SESSION['ans']=$a+$b;
        ?>
        <input type="text" name="code" id="code"></td>
    </tr>
</table>
<div class="ct"><button onclick="login('mem')">確認</button></div>

<script>
    function login(table){
        let ans=$("#code").val();
        let user={acc:$("#acc").val(),pw:$("#pw").val(),table}

        $.get("./api/ans.php",{ans},(chk)=>{
            console.log(chk)
            if(parseInt(chk)===1){
                 $.get("./api/login.php",user,(chk)=>{
                    // console.log(chk)
                     if(parseInt(chk)===1){
                         switch(table){
                             case 'mem':
                                 location.href='index.php'
                             break;
                             case 'admin':
                                 location.href='back.php'
                             break;
                         }
                     }else{
                        alert("帳號或密碼有誤")
                     }
                 })
            }else{
                alert("對不起，您輸入的驗證碼有誤請您重新登入")
            }
        })

    }
</script>