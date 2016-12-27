<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page | Amaze UI Example</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <style>
        

        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }

        .header p {
            font-size: 14px;
        }

        form {
            border: solid 1px #b9b9b9;
            padding: 30px;

            margin-right: 180px;
            width: 250px;
            height: 350px;
            float: right;
        }

        

        form > label, form > div {
            font-size: 10px;
        }

        form > hr {
            border-color: #7c7c7c;
            margin-top: 1px;
            margin-bottom: 5px;
        }

        .am-form input[type=password] {
            padding: 0.2em;
        }

        .am-form input[type=text] {
            padding: 0.2em;
        }

        .am-form input[type=email] {
            padding: 0.2em;
        }






    </style>
</head>
<body>
<?php include "login-head.php"?>
<hr>
<div class="am-g">
    <div class="am-u-lg-12 am-u-md-12 am-u-sm-centered">


        <br>
        <br>

        <img src="https://img.alicdn.com/tps/TB1nwV0OFXXXXbtXpXXXXXXXXXX-900-700.jpg"
             style="width: 450px;margin-left: 150px"/>


        <form method="post" class="am-form" action="admin-index.php">
            <div>请登录111111222222</div>
            <hr>

            <label for="email">帐号:</label>
            <a href="reg.php" style="float: right;font-size: 10px;font-family: 'Microsoft Yahei;';margin-top: 5px;">免费注册</a>
            <input type="text" name="" id="email" value="">
            <label for="password">密码:</label>
            <a href="foget.php" style="float: right;font-size: 10px;font-family: 'Microsoft Yahei;';margin-top: 5px;">忘记密码?</a>
            <input type="password" name="" id="password" value="">
            <label for="">图形验证码:</label>

            <div class="am-u-md-12" style="padding-left: 0px;margin-bottom: 10px;">
                <input type="text" value="" style="width: 50%;" class="am-u-md-6">
                <img class=" am-u-md-6"
                     src="http://alicms.9hlh.com/api/identifying_code.php?w=112&h=40&rd=0.986833403352648">
            </div>

            <br/>
            <input class="am-cf am-btn am-btn-primary am-btn-sm" type="submit" style="width: 100%" value="登录">

            </input>

         


        </form>
        <br style="clear: both">
        <hr>

        <?php include "login-footer.php"?>



    </div>
</div>
</body>
</html>
