<!-- sidebar start -->

<style>


    .admin-sidebar-sub>li,.admin-sidebar-sub>li,.admin-sidebar,.admin-sidebar-list>li{
        background: #293038;
    }

    .admin-sidebar-list>.admin-parent{
        background: #42485B;
    }

    .admin-sidebar-list>li:hover,.admin-sidebar-sub>li:hover{
        background: #42485B;
    }


    .admin-sidebar-list li a{
        color: #c9c9c9;
    }

    .am-panel-bd{
        color: #c9c9c9;
    }

    .am-list>li{
        border: none;
    }

    .admin-sidebar-sub{
        padding-left: 0px;

    }


    .admin-sidebar-sub li:first-child{
        border-top:none;
    }

    .admin-sidebar{
        width: 180px;
        font-size: 12px;
    }



</style>




<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">

            <li style="background: #4A5064;"><a href="javascript:zankai();" class="zankai" style="display: none"><span >→</span></a><a href="javascript:shouqilai();" class="sousu"><span class="caidantext">←收缩菜单</span></a></li>
            <li><a href="admin-index.php"><span class="am-icon-home"></span> <span class="caidantext">首页</span></a></li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> <span class="caidantext">页面模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                    <li><a href="admin-user.php" class="am-cf"><span class="am-icon-check"></span> <span class="caidantext">个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></span></a></li>
                    <li><a href="admin-help.php"><span class="am-icon-puzzle-piece"></span> <span class="caidantext">帮助页</span></a></li>
                    <li><a href="admin-gallery.php"><span class="am-icon-th"></span> <span class="caidantext">相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></span></a></li>
                    <li><a href="admin-log.php"><span class="am-icon-calendar"></span> <span class="caidantext">系统日志</span></a></li>
                    <li><a href="admin-404.php"><span class="am-icon-bug"></span> <span class="caidantext">404</span></a></li>
                </ul>
            </li>
            <li><a href="admin-table.php"><span class="am-icon-table"></span> <span class="caidantext">表格</span></a></li>
            <li><a href="admin-form.php"><span class="am-icon-pencil-square-o"></span> <span class="caidantext">表单</span></a></li>
            <li><a href="#"><span class="am-icon-sign-out"></span><span class="caidantext"> 注销</span></a></li>
        </ul>


    </div>
</div>

<script>

    function shouqilai() {

            $(".sousu").hide();
            $(".caidantext").hide();
            $(".zankai").show();
            $(".admin-sidebar").width(80);

    }

    function zankai() {
        $(".sousu").show();
        $(".caidantext").show();
        $(".zankai").hide();
        $(".admin-sidebar").width(180);
    }



</script>











<!-- sidebar end -->