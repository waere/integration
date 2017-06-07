<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keywords" content="炫卫者,LED手电筒" />
    <meta name="description" content="深圳市鑫辉光电有限公司" />
    <meta name="author" content="PM : MaChao | www.KanKan360.com Mobile:13510688857">
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="images/sunwayman.ico" type="image/x-icon" />
    <title>SUNWAYMAN-服务与支持</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/swiper-3.4.2.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/skins/square/green.css">
    <link rel="stylesheet" href="css/sunwayman.css">
    <style>
        .row{
            margin: 0;
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--顶部-->
    <?php
        require("inc/header.php");
    ?>
    

    <!--产品详情页菜单-->
    <div class="pro-menu-box" id="prMenuBox">
        <div class="container">
            <div class="row">
                <div class="col-md-6 proTitle hidden-xs hidden-sm">                    
                    教育
                </div>
                <div class="col-md-6 proMenu">
                    <div><a href="#">常见问题</a></div>
                    <div><a href="#">专业知识</a></div>
                    <div style="margin-right: 15px;"><a href="#">相关知识</a></div>
                    <div class="index-jdp-box" style="flex-grow: 3;">
                        <a href="#">
                            <span class="hidden-xs">相关知识</span>
                             <span class="iconfont">&#xe60f;</span>
                        </a>  
                    </div>
                    <div class="index-lang-box hidden-xs">
                        <a href="javascript:pageScroll();" class="">回到顶部</a>
                        <!-- <a href="#" class="hidden-sm hidden-md hidden-lg">TOP</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--常见问题-->
    <div class="cpmd">
        <div class="container">
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
            <div class="row">
                <div class="col-xs-9 nopd">
                    <div class="cpmd-title">SUNWAYMAN 法律声明</div>
                    <div class="minsize">首页/ 法律声明</div>
                </div>
                <div class="col-xs-3 cpmd-titleIco">
                    <span class="iconfont"></span>
                </div>
            </div>
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
        </div>
    </div>
    <div class="cpmd2" id="flsm">
        <div class="container">
            <div class="row serverBzList">
                <div class="col-xs-12 BzBigTitle">网站的使用</div>
                <!--数据绑定-->
                <div class="col-xs-12 BzList" v-for="item in fsList1">
                    <div class="BzSmTitle" :class="{BzItemActive:item.sw}" @click="item.sw = !item.sw;">{{item.fsT}}</div>
                    <transition
                        name="MC03-transition"
                        enter-active-class="animated fadeInUp"
                        leave-active-class="animated fadeOut"
                    >
                    <div class="BzContent" v-if="item.sw" v-html="item.fsC"></div>
                    </transition>
                </div>
            </div>
        </div>
    </div>


    <!--底部共用-->
    <?php
        require("inc/footer.php");
    ?>
    <!--移动端菜单-->
    <?php
        require("inc/smenu.php");
    ?>
    
    <!--脚本-->
    <script type="text/javascript" src="js/jquery.min.1.12.4.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="js/vue.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/icheck.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/mc.public.js"></script>
    <script>
        'use strict';
        $(function(){
            $("img").lazyload({effect: "fadeIn"});
            new WOW().init();
            alignLorR();
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
                increaseArea: '-10' // optional
            });
        });
        // 滚动时产品菜单项置顶
        // $(document).scroll(function(){
        //     var oft = $(".products-showBox").height();
        //     var sct = $(document).scrollTop();
        //     var cz = sct-oft;            
        //     if(cz >= 60)
        //     {
        //         $("#prMenuBox").css({"z-index":99999,"position":"fixed"});
        //     }
        //     else
        //     {
        //         $("#prMenuBox").css({"z-index":1,"position":"inherit"});
        //     }    
        // });
        // 返回页面顶部
        function pageScroll() { 
            $('body').animate({scrollTop: 0}, 500); 
        }
        // 左右对齐
        function alignLorR() {
            //动画框统一左边框
            $(".aL").each(function(){
                $(this).css("left",$(".index-logo").offset().left+"px");
            });
            // 动画框统一右边框
            $(".aR").each(function(){
                $(this).css("right",$(document).width()-($(".index-lang-box").width()+$(".index-lang-box").offset().left)+"px");
            });
        }
        window.addEventListener('resize',function(){
            alignLorR();
        });
        // 安全保障政策
        var FsData = {
            fsList1:[
                {
                    fsT:'',
                    sw:true,
                    fsC:'SUNWAYMAN(炫卫者)网站（以下简称"本站"）上的内容，仅供您个人而非商业用途的使用。对于内容中所含的版权和其他所有权声明，您应予以尊重并合法使用。如果网站内容无权利声明，并不代表网站对其不享有权利，也不意味着网站不主张权利，您应根据诚信原则尊重该等内容的合法权益并进行合法使用。您不得以任何方式修改、复制、公开展示、公布或分发这些材料或者以其他方式把它们用于任何公开或商业目的。禁止以任何目的把这些材料用于其他任何网站或其他平面媒体或网络计算机环境。本站上的内容及编辑等形式均受版权法等法律保护，任何未经授权而使用本网站材料的行为都可能构成对版权和其他法律权利的侵犯。本网站及相关链接网站上使用和显示的商标、服务商标和标识（以下统称"商标"）是和其他权利人注册和未注册的有关商标。您使用或接触该等网站上的任何内容，不能被解释为授予您任何使用有关商标的权利。未经事先书面许可，您不得以任何方式使用SUNWAYMAN(炫卫者)的商标。除非事先书面许可，SUNWAYMAN(炫卫者)禁示您使用SUNWAYMAN(炫卫者)商标作为任何SUNWAYMAN(炫卫者)有关网站的"热"链接。<br/><br/>如果您不接受或违反上述约定，您使用本站的授权将自动终止，同时您应立即销毁任何已下载或打印好的本站内容。'
                },
                {
                    fsT:'信息发布',
                    sw:false,
                    fsC:'SUNWAYMAN(炫卫者)公司保留所有的权利。所有的文字，图片，照片，音频文件，动画文件，视频文件以及SUNWAYMAN(炫卫者)网站所有的版面设计和其他知识产权均受保护。不可复制用于商业目的或发行，也不可修改后在其他网站使用。一些SUNWAYMAN(炫卫者)网站中的图片版权属于第三方提供者。'
                },
                {
                    fsT:'商标',
                    sw:false,
                    fsC:'除非特别指明，SUNWAYMAN(炫卫者)网站的所有商标都在SUNWAYMAN(炫卫者)商标权的范围内。其中包括SUNWAYMAN(炫卫者)公司的每一个品牌系列、手电型号的名字，以及公司的品牌和形象。'
                },
                {
                    fsT:'无担保',
                    sw:false,
                    fsC:'由SUNWAYMAN(炫卫者)公司提供的这些信息，并不意味着提供任何质量担保，任何关于机械性能方面的保证，任何特殊用途的有效性以及无损害性。尽管我们提供的这些信息尽可能真实可靠，但实际上也有可能存在错误或不准确之处。'
                },
                {
                    fsT:'不予授权',
                    sw:false,
                    fsC:'SUNWAYMAN(炫卫者)一直力求打造一个具有革新性并且信息丰富的网站，真心希望您能成为我们的热心支持者。同时，SUNWAYMAN(炫卫者)也必须保护它的知识产权不受侵害，包括它的专利，商标和版权。因此，在本网站上使用的无论SUNWAYMAN(炫卫者)的知识产权或第三方的知识产权都不被授权在别处使用。'
                }
            ]
        };
        var educWtList = new Vue({
            el:"#flsm",
            data:FsData,
            methods:{

            }
        });
    </script>
</body>
</html>