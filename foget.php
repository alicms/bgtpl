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
    <script src="assets/js/jquery.min.js"></script>
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

            width: 320px;


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

        form .star{
            color: red;
        }





    </style>
</head>
<body>
<?php include "login-head.php"?>
<hr>


<div class="am-g">

    <div class="am-u-lg-12 am-u-md-12 am-u-sm-centered">


        <br>



        <form method="post" class="am-form am-center" action="admin-index.php">
            <div>请输入你需要找回登录密码的用户名</div>

            <hr style="clear: both">

            <label for="email"><sapn class="star">*</sapn>帐号:</label>

            <input type="text" name="" id="email" value="">

            <label for=""><sapn class="star">*</sapn>图形验证码:</label>

            <div class="am-u-md-12" style="padding-left: 0px;margin-bottom: 10px;">
                <input type="text" value="" style="width: 50%;" class="am-u-md-6">
                <img class=" am-u-md-6" style="width: 100px;float: none;margin-left: 10px"

                     src="http://alicms.9hlh.com/api/identifying_code.php?w=112&h=40&rd=0.986833403352648">
            </div>

            <hr>
            <label for="" ><sapn class="star">*</sapn>手机验证码:</label>
            <div  class="am-u-md-12" style="padding-left: 0px;margin-bottom: 10px;">
                <input type="text" value="" style="width: 50%;" class="am-u-md-6">
                <button class="am-fr am-btn am-btn-success" style="font-size: 12px; width: 120px;height: 30px; margin-left: 10px;" id="getcodebutton" type="button">获取验证码</button>
            </div>


            <br>
            <label for="password"><sapn class="star">*</sapn>密码:</label>
            <input type="password" name="" id="password" value="" disabled>
            <label for="password"><sapn class="star">*</sapn>重复密码:</label>
            <input type="password" name="" id="password2" value="" disabled>


            <input class="am-cf am-btn am-btn-primary am-btn-sm" type="submit" style="width: 100%;margin-top: 10px;" disabled value="立即设置密码"/>




            </div>


        </form>
        <br style="clear: both">
        <hr>

        <?php include "login-footer.php"?>



    </div>
</div>


<script>

    $("#getcodebutton").click(function () {
        //$(this).removeClass("am-btn-success");
        $(this).attr("disabled",true);

        window.setInterval(function(){
            fors();
        }, 1000);


    })

    var times = 20 ;
    function fors() {
        times-- ;
        if(times>=0){
            $("#getcodebutton").html(times+"秒后获取");
            console.log("fsdaf");
        }else{
            $("#getcodebutton").attr("disabled",false);
            $("#getcodebutton").html("获取验证码");
        }



    }






</script>


</body>
</html>
