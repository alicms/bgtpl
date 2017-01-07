<?php
if (false){?>

<link rel="stylesheet" href="assets/css/amazeui.min.css"/>
<?php } ?>


<style>

/*header菜单字体颜色*/
.am-topbar .mainmenu>li>a {
        color: #c9c9c9;
    }
/*子菜单颜色*/
.submenu>li>a{
    color: #c9c9c9;
    margin-top: 10px;
}


/*header的背景*/
.am-topbar {
        background: #373d41;
        margin-bottom:0px;
        border-style:none;
    }
/*字体垂直居中,菜单高度设置*/
    .am-nav-justify >li{
        margin-top: 20px;
        height: 60px;
    }
    /*菜单选中时背景变化使用,确定菜单高度*/
    .am-nav-justify a{
         height: 60px;

     }



    header{
        height: 80px;
        min-width: 1080px;
    }

    header li{
        font-size: 16px;
    }
    .am-nav-justify>li>a{
        padding-bottom: 25px;
    }
    header strong{
        font-size: 20px;
    }
    header small{
        font-size: 14px;
    }
/*active样式*/
    .am-nav>li.am-active>a {
        color: #ff622e;
        background-color: unset;
        cursor: default;
    }

/*active鼠标移上去样式*/
.am-nav>li.am-active>a:hover {
    color: #ff622e;
    background-color: unset;

}
/*鼠标移到非active上的样式*/
    .am-nav>li>a:hover {
        text-decoration: none;
        background-color: unset;
        color: #ff622e;
    }

    .submenu>.active>a{
        color: #fe8602;
    }



</style>



<header class="am-topbar alimenu">

    <div class="">
        <div class="am-topbar-brand">
            <a href="#" style=""><img src="http://www.jme.com/Content/images/logo.jpg" style="height: 50px;padding-bottom: 10px;"></a>
        </div>

        <ul class="am-nav am-nav-pills am-nav-justify mainmenu" style="margin-bottom: 0px">
            <li value="0" class="am-active"><a href="#" style="">首页</a></li>
            <li value="2"><a href="#">开始使用</a></li>
            <li value="3"><a href="#">按需定制</a></li>
            <li value="4"><a href="#">加入我们</a></li>
            <li value="0"><a href="#">开始使用</a></li>
            <li value="0"><a href="#">按需定制</a></li>
            <li value="0"><a href="#">加入我们</a></li>
            <li value="0"><a href="#">按需定制</a></li>
            <li value="0"><a href="#">加入我们</a></li>
        </ul>


    </div>



    <div  id="submenu" style=" background-color:  rgba(0, 0, 0, 0.7);height: 60px;padding-right: 200px;padding-left: 200px;display: none" data-am-sticky>
        <ul class="am-nav am-nav-pills am-nav-justify submenu submenu2" style="display: none" >
            <li class="am-active"><a href="#" style="">首页1</a></li>
            <li><a href="#">开始使用1</a></li>
            <li><a href="#">加入我们1</a></li>
            <li><a href="#">开始使用1</a></li>
            <li><a href="#">加入我们1</a></li>
        </ul>
        <ul class="am-nav am-nav-pills am-nav-justify submenu submenu3"  style="margin-top:0px;display: none">
            <li class="am-active"><a href="#" style="">首页2</a></li>
            <li><a href="#">开始使用2</a></li>
            <li><a href="#">加入我们2</a></li>
            <li><a href="#">开始使用2</a></li>
            <li><a href="#">加入我们2</a></li>
        </ul>
        <ul class="am-nav am-nav-pills am-nav-justify submenu submenu4"  style="margin-top:0px;display: none">
            <li class="am-active"><a href="#" style="">首页3</a></li>
            <li><a href="#">开始使用3</a></li>
            <li><a href="#">加入我们3</a></li>
        </ul>
    </div>

</header>


<script>

    var showindex = 3 ;

    $(".mainmenu>li").hover(function () {

        var value = $(this).attr("value");
        if(value==0){
            $("#submenu").hide();
            return ;
        }
        $(".submenu").hide();
        $(".submenu"+value).show();
        $("#submenu").show();

    })
    $(".mainmenu>li").mouseleave(function () {
//        $("#submenu").hide();

    })
    $("#submenu").mouseleave(function () {
//        $(this).hide();

    })

    $(".alimenu").mouseleave(function () {
        if(document.body.scrollTop<=90){

            $("#submenu").hide();
        }



    })


    $(".submenu"+showindex).show();
    $(document).scroll(function() {
        if(document.body.scrollTop>90){
            if(showindex!=0){
                $("#submenu").show();
            }
        }else{
            $("#submenu").hide();
        }
    });




</script>



