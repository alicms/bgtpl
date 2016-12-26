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
        .header {
            text-align: center;
        }

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
            width: 294px;
            height: 410px;
            float: right;
        }

        .am-topbar-inverse {
            background: #565656;
        }

        .ali-right-div {
            float: right;
            margin-top: 16px;
            margin-right: 10px;
            font-size: 12px;
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

        form > .alicode {
            width: 30px;
        }

        .aliimgcode {
            width: 30px;
            height: 20px;
        }

        footer  .lianxi>a{
            color: #666;
            font-size: 12px;

        }
        footer  .youqinglianjie>a{
            color: #b3b3b3;
            font-size: 12px;
        }
        footer .aliicp{
            color: #999;
            font-size: 12px;
        }

    </style>
</head>
<body>
<header class="am-topbar am-topbar-inverse">
    <div class="am-container">
        <div class="am-topbar-brand">
            <strong>AliCMS</strong>&nbsp;&nbsp;&nbsp;&nbsp;后台管理模版
        </div>


        <div class="ali-right-div">网站首页&nbsp;&nbsp;|&nbsp;&nbsp;帮助文档&nbsp;&nbsp;|&nbsp;&nbsp;API接口&nbsp;&nbsp;|&nbsp;&nbsp;论坛</div>


    </div>


</header>
<hr>
<div class="am-g">
    <div class="am-u-lg-12 am-u-md-12 am-u-sm-centered">


        <br>
        <br>

        <img src="https://img.alicdn.com/tps/TB1nwV0OFXXXXbtXpXXXXXXXXXX-900-700.jpg"
             style="width: 450px;margin-left: 150px"/>


        <form method="post" class="am-form">
            <div>请登录111111222222</div>
            <hr>

            <label for="email">邮箱:</label>
            <input type="email" name="" id="email" value="">
            <label for="password">密码:</label>
            <input type="password" name="" id="password" value="">
            <label for="">图形验证码:</label>

            <div class="am-u-md-12" style="padding-left: 0px;margin-bottom: 10px;">
                <input type="text" value="" style="width: 50%;" class="am-u-md-6">
                <img class=" am-u-md-6"
                     src="http://alicms.9hlh.com/api/identifying_code.php?w=112&h=40&rd=0.986833403352648">
            </div>

            <br/>
            <div class="am-cf am-btn am-btn-primary am-btn-sm" style="width: 100%">
                登录
            </div>

            <div style="font-size: 10px;margin-top: 10px"><input type="checkbox">&nbsp;&nbsp;<span>我同意并已阅读 <a href="#">《AliCMS服务协议》</a></span>
            </div>


        </form>
        <br style="clear: both">
        <hr>

        <footer>


            <div style="background: #EBEBEB;height: 90px;margin-top: 100px;">

                <img  src="assets/i/phone.gif" style="width: 50px;padding-top: 20px;padding-bottom: 20px;margin-left: 100px;float: left;">
                <div style="float: left;padding-left: 20px;padding-top: 15px;">
                    <span style="font-size: 16px;color: #373D41;font-family: Microsoft YaHei;"">售前咨询</span><br>
                    <span style="font-size: 22px;color: #373D41;font-family: Microsoft YaHei;">1234500000</span>


                </div>
                <div class="am-text-center " style="float: left;padding-left: 200px;padding-top: 35px;"">

                <span style="color: #373D41;">全方位的购买咨询&nbsp; <span style="color: #CFD0D1;">|</span>&nbsp; 精准的配置推荐&nbsp; <span style="color: #CFD0D1;">|</span>&nbsp;灵活的价格方案&nbsp;<span  style="color: #CFD0D1;">&nbsp;|</span>&nbsp; 1对1贴心服务</span>
                </div>


            </div>



            <div class="am-text-center lianxi" style="margin-top: 20px;">
            <a href="#">关于我们</a>&nbsp;&nbsp;&nbsp;<a href="#">联系我们</a>&nbsp;&nbsp;&nbsp;<a href="#">法律声明</a>
            </div>
            <div class="am-text-center youqinglianjie">
                <a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;<a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;<a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;
                <a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;<a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;<a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;
                <a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;<a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;<a href="#">阿里巴巴集团</a>&nbsp;&nbsp;&nbsp;
                <a href="#">阿里巴巴集团</a>

            </div>
            <div class="am-text-center aliicp">
                © 2015 Aliyun.com 版权所有 ICP证：浙B2-20080101
            </div>




        </footer>



    </div>
</div>
</body>
</html>
