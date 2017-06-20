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
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="images/sunwayman.ico" type="image/x-icon" />
    <title>SUNWAYMAN-炫卫者官网-T40CS-PLUS</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/swiper-3.4.2.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/sunwayman.css">
    <link rel="stylesheet" href="css/modify.css">
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
    
    <!--详情大图-->
    <div id="advBrandShow">
        <!--详情-->
        <div class="products-showBox" id="products-showBox" v-show="nv1Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T40CS PLUS/T40CS-PLUS-001.jpg" class="img-responsive hidden-xs">
                <img src="images/T40CS PLUS/T40CS-PLUS-001-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:20%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 30px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">T40CS PLUS</div>
                <div class="wow bounceInRight" style="font-size: 36px;line-height: 60px;font-weight:400;" data-wow-duration="1s" data-wow-delay="0.5s">中白光远射型侧按战术手电丨1488流明</div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#xingqing">产品详情</a></div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:90%;left:10%;overflow:hidden;top:5%;text-align:left;position: absolute;color: #fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 18px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">T40CS PLUS</div>
                <div class="wow bounceInRight" style="font-size: 22px;line-height: 60px;font-weight:400;" data-wow-duration="1s" data-wow-delay="0.5s">中白光远射型侧按战术手电丨1488流明</div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#xingqing">产品详情</a></div>
            </div>
        </div>
        <!--场景-->
        <div class="products-showBox" id="products-showBox" v-show="nv2Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T40CS PLUS/T40CS-PLUS-007.jpg" class="img-responsive hidden-xs">
                <img src="images/T40CS PLUS/T40CS-PLUS-007-s.jpg" class="img-responsive visible-xs-inline">
            </div>
        </div>
        <!--参数-->
        <div class="products-showBox" id="products-showBox" v-show="nv3Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T40CS PLUS/T40CS-PLUS-013.jpg" class="img-responsive hidden-xs">
                <img src="images/T40CS PLUS/T40CS-PLUS-013-s.jpg" class="img-responsive visible-xs-inline">
            </div>
        </div>
    </div>
    <!--产品详情页菜单-->
    <div class="pro-menu-box" id="prMenuBox" style="background-color:#fff;    box-shadow: rgba(0, 0, 0,.2) 0px 2px 26px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 advProMenu">
                    <div :class="{advNavActive:nv1Status}"><a href="javascript:;" @click="changeTab(1);"><span class="hidden-xs">DETAILS </span>详情</a></div>
                    <div :class="{advNavActive:nv2Status}"><a href="javascript:;" @click="changeTab(2);"><span class="hidden-xs">SCENE </span>场景</a></div>
                    <div :class="{advNavActive:nv3Status}"><a href="javascript:;" @click="changeTab(3);"><span class="hidden-xs">PARAMETER </span>参数</a></div>
                    <div><a href="http://item.jd.com/11646351145.html" target="view_window"><span class="hidden-xs">SHOP </span>购买</a></div>
                </div>
            </div>
        </div>
    </div>
    
    <!--详情-->
    <div id="advDetail" v-show="nv1Status" data-spy="scroll" data-target="#advDetailZhiShiQi" style="position: relative;">

        <!--详情图片1-->
        <div class="p-detailBox" id="xingqing">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-002.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-002-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:55%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    高品质航空T6级铝材
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ALL METAL FUSELAGE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    LLL级军规硬质氧化，耐磨、防汗、防腐蚀
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe70e; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe713; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe712; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe711;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:5%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">高品质航空T6级铝材</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ALL METAL FUSELAGE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    LLL级军规硬质氧化，耐磨、防汗、防腐蚀
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe70e;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe713;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe712;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe711;</span>
                </div>
            </div>      
        </div>
        <!--详情图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-003.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-003-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:15%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    尾部战术开关
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    OPTICAL CONVEX SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    尾部战术开关在开机的时候始终锁住最高档<br/>满足你迅速反应、战术警戒、快速射击的需求
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">尾部战术开关</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">OPTICAL CONVEX SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    尾部战术开关在开机的时候始终锁住最高档<br/>满足你迅速反应、战术警戒、快速射击的需求
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                </div>
            </div>      
        </div>
        <!--详情图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-004.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-004-s.jpg" class="img-responsive visible-xs-inline">
            </div> 
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:35%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    有效射程达500米
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    FAST DISTANCE FOCUSING SYSYEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    旋转灯头，快速调焦，最左为 最散光状态<br/>最右为最聚光状态 凸透镜的平移行程约10MM
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">有效射程达500米</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">FAST DISTANCE FOCUSING SYSYEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    旋转灯头，快速调焦，最左为 最散光状态<br/>最右为最聚光状态 凸透镜的平移行程约10MM
                </p>
            </div>       
        </div>
        <!--详情图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-005.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-005-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:15%;left:8%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    标志性侧按轻触开关
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    TOP LED LIGHT SOURCE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    SUNWAYMAN全新远射中白光手电T40CS PLUS<br/>您工作、探险、搜索等高标准照明需求的最理想的工具
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">标志性侧按轻触开关</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">TOP LED LIGHT SOURCE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    SUNWAYMAN全新远射中白光手电T40CS PLUS<br/>您工作、探险、搜索等高标准照明需求的最理想的工具
                </p>
            </div>        
        </div>
        <!--详情图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-006.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-006-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:15%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="1s" data-wow-delay="0s">
                    CREE MT-G2 LED核心
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                    ROMANTIC BAR
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 25px;margin-top:20px;" data-wow-duration="1s" data-wow-delay="0.8s">
                   中白光显色好，穿透力强<br/>采用CRE全新核心中白光LED MT-G2<br/>最高可发出达1488流明的中白光强光束
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe704; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe706;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;" data-wow-duration="1s" data-wow-delay="0s">CREE MT-G2 LED核心</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;line-height:40px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="1s" data-wow-delay="0.5s">ROMANTIC BAR</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                   中白光显色好，穿透力强<br/>采用CRE全新核心中白光LED MT-G2<br/>最高可发出达1488流明的中白光强光束
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe704;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe706;</span>
                </div>
            </div>        
        </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos1">
                    <img src="images/T40CS PLUS/T40CS-PLUS-020-l.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexL">
                    <div class="leftNavFlex">
                        <div class="navWhatText">Why wait ? Order yours now .</div>
                        <div class="navNowBuy">
                            <a href="http://item.jd.com/11646351145.html" target="view_window" onmouseenter='$("#navLimgPos1").fadeIn();' onmouseout='$("#navLimgPos1").fadeOut();'>立即购买</a>
                        </div>
                    </div>                    
                </div>
                <div class="col-sm-6 navRimgPos" style="display:none" id="navRimgPos1">
                    <img src="images/T40CS PLUS/T40CS-PLUS-020-r.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexR">
                    <div class="rightNavFlex">
                        <a href="javascript:advNavBar.changeTab(2);" onmouseenter='$("#navRimgPos1").fadeIn();' onmouseout='$("#navRimgPos1").fadeOut();'>
                            <div class="rightTipsText">
                                NEXT<br />
                                场景 SCENE
                            </div>
                            <div class="rightTipsArrow">
                                <img src="images/rarrow.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--场景-->
    <div id="advScenario" v-show="nv2Status">
        <!--场景图片1-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-008.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-008-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:10%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    锁定最高亮
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    AVIATION GRADE ALUMINUM T6
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    T40CS PLUS专为战术应用而设计，尾部按钮在开机的时候始终锁住<br/>最亮档，不受侧按开关调光的影响
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e3;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:15%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">锁定最高亮</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">AVIATION GRADE ALUMINUM T6</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    T40CS PLUS专为战术应用而设计，尾部按钮在开机的时候始终锁住<br/>最亮档，不受侧按开关调光的影响
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e3;</span>
                </div>
            </div>         
        </div>
        <!--场景图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-009.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-009-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:20%;text-align:center;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    电子防反接电路
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ELECTRONIC ANTI REVERSE CIRCUIT
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    新一代、更加可靠的电子防反接电路，即使无意装反电池，手电绝不损伤
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ec;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:8%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">电子防反接电路</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ELECTRONIC ANTI REVERSE CIRCUIT</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    新一代、更加可靠的电子防反接电路，即使无意装反电池，手电绝不损伤
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ec;</span>
                </div>
            </div>       
        </div>
        <!--场景图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-010.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-010-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:18%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    IPX-8 防水标准
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    IPX-8 WATERPROOF STANDARD
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    非常适合户外摄影、搜索、露营等照明需求
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe716;</span>
            </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">IPX-8 防水标准</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">IPX-8 WATERPROOF STANDARD</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    非常适合户外摄影、搜索、露营等照明需求
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe716;</span>
            </div>
            </div>       
        </div>
        <!--场景图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-011.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-011-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:30%;left:8%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    专用反光杯
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    SPECIAL REFLECTOR CUP
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    采用CRE全新核心中白光LED MT-G2 配合专用反光杯<br/>聚光和远射达到完美统一，同时中心光斑完美<br/>泛关均匀而柔和，近距照射同样优秀
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6fb;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">专用反光杯</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">SPECIAL REFLECTOR CUP</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    采用CRE全新核心中白光LED MT-G2 配合专用反光杯<br/>聚光和远射达到完美统一，同时中心光斑完美<br/>泛关均匀而柔和，近距照射同样优秀
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:50px;color:#009a44;">&#xe6fb;</span>
                </div>
            </div>       
        </div>
        <!--场景图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-012.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-012-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:10%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    恒流电路，智能电压
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    CONSTANT CURRENT CIRCUIT, INTELLIGENT VOLTAGE 
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    恒流电路，亮度恒定，不闪烁，不伤眼，人性化照明<br/>智能低电压保护功能，保护电池不过放
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e9;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">恒流电路，智能电压</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">CONSTANT CURRENT CIRCUIT</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    恒流电路，亮度恒定，不闪烁，不伤眼，人性化照明<br/>智能低电压保护功能，保护电池不过放
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:50px;color:#009a44;">&#xe6e9;</span>
                </div>
            </div>       
        </div>

        <!--产品卖点部分-->
        <div id="卖点" class="cpmd">
            <div class="container">
                <!--卖点标题-->
                <div class="row hidden-xs" style="height:50px;"></div>
                <div class="row visible-xs-block" style="height:20px;"></div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="cpmd-title">T40CS PLUS 产品卖点</div>
                        <div>首页/产品中心/T40CS PLUS/卖点</div>
                    </div>
                    <div class="col-xs-3 cpmd-titleIco">
                        <span class="iconfont">&#xe61e;</span>
                    </div>
                </div>
                <div class="row hidden-xs" style="height:50px;"></div>
                <div class="row visible-xs-block" style="height:20px;"></div>
            </div>
        </div>
        <div class="cpmd2">
            <div class="container">
                <!--卖点列表-->
                <div class="row cpmdList">
                    <ul>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            使用一颗Cree Xlamp mt-G2（暖白） LED，寿命长达50,000小时
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            尾部按钮战术开关，侧按轻触式调光、待机按钮：四个常亮档，隐藏爆闪档、SOS档
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            恒流电路，亮度恒定
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            有效射程达500米
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            使用两节18650电池电池或者四节CR123A电池
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            工作电压：5.5~16.8V
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            体积：225mm (长) x*64mm(头部直径)*25.4mm（尾部直径） 
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            优质金属反光杯，兼顾聚光和泛光，光斑完美
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            重量：273（不含电池）
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            采用航天级铝合金制造，头部不锈钢压环
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            军规三级硬质氧化
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            IPX-8级防水
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            增韧超清晰钢化玻璃镜片，防刮耐磨
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            战术开关，可瞬间点亮
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            附件：战术环、橡胶环、手电套、防水O圈、防水帽
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos2">
                    <img src="images/T40CS PLUS/T40CS-PLUS-020-l.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexL">
                    <div class="rightNavFlexA">
                        <a href="javascript:advNavBar.changeTab(1);" onmouseenter='$("#navLimgPos2").fadeIn();' onmouseout='$("#navLimgPos2").fadeOut();'>
                            <div class="rightTipsArrow">
                                <img src="images/larrow.png" alt="">
                            </div>
                            <div class="rightTipsTextA">
                                PREV<br />
                                详情 DETAILS
                            </div>                            
                        </a>
                    </div>                    
                </div>
                <div class="col-sm-6 navRimgPos" style="display:none" id="navRimgPos2">
                    <img src="images/T40CS PLUS/T40CS-PLUS-020-r.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexR">
                    <div class="rightNavFlex">
                        <a href="javascript:advNavBar.changeTab(3);" onmouseenter='$("#navRimgPos2").fadeIn();' onmouseout='$("#navRimgPos2").fadeOut();'>
                            <div class="rightTipsText">
                                NEXT<br />
                                参数 PARAMETER
                            </div>
                            <div class="rightTipsArrow">
                                <img src="images/rarrow.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--参数-->
    <div id="advParam" v-show="nv3Status">
        <!--产品使用说明-->
        <div id="使用" class="cpmd">
            <div class="container">
                <div class="row hidden-xs" style="height:50px;"></div>
                <div class="row visible-xs-block" style="height:20px;"></div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="cpmd-title">T40CS PLUS 使用说明</div>
                        <div>首页/产品中心/T40CS PLUS/使用</div>
                    </div>
                    <div class="col-xs-3 cpmd-titleIco">
                        <span class="iconfont">&#xe61f;</span>
                    </div>
                </div>
                <div class="row hidden-xs" style="height:50px;"></div>
                <div class="row visible-xs-block" style="height:20px;"></div>
            </div>
        </div>
        <div class="cpmd2">
            <div class="container">
                <div class="row usegrid">
                    <div class="col-xs-12 col-sm-9 usegrid-txt">
                        <p>操作方法</p>
                        战术瞬间点亮：<br/>
                        轻按尾部开关，可瞬间点亮手电，松开即可关闭手电，操作过程中不会发出按键声响，不会惊动目标或者猎物；战术点亮时的手电档位始终锁定手电最高亮档;<br/>
                        战术常规点亮：<br/>
                        深按尾部开关，发出“咔嗒”轻响，即可点亮手电并锁定；再次深按尾部开关，发出“咔嗒”轻响，即可弹出开关，关闭手电；手电常规点亮时的档位是手电最高亮档；<br/><br/>
                        <p>侧按轻触按钮使用方式及开关</p>
                        A.常规档位切换：<br/>本手电采用业界领先轻触式侧按按钮调光，按下尾部按钮，锁定手电使之处于最高亮状态，此时按下侧按按钮不松手，手电的档位即在高-中-低三个常亮档中循环，当循环到您所需要的亮度时，松开手指即可锁定亮度；<br/>
                        B.调出隐藏档：<br/>在手电锁定任何亮度的情况下，双击侧按按钮，即可调出隐藏的爆闪档；再次双击侧按按钮可调出隐藏的SOS档；<br/>
                        C.侧按按钮开关机：<br/>在手电处于常亮档或者隐藏闪烁档时，轻按侧按按钮即可实现关机；此时手电没有完全切断电流，属于弱电流待机状态（待机电流50微安左右）；再次单击侧按按钮即可点亮手电，手电亮度为上次关机时的常亮档；<br/><br/>
                        <p>彻底关闭手电</p>
                        在任意亮度，按下尾部按钮，即可彻底关闭手电。
                    </div>
                    <div class="col-xs-12 col-sm-3 usegrid-ico">
                        <span class="iconfont">&#xe620; </span>
                    </div>
                </div>
            </div>
        </div>
        <!--使用说明图片1-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-014.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-014-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    万能魔术键
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    TAIL HANDSTAND
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    在尾部开关不断电的情况下，它还可以记忆上次侧按关机时的亮度<br/>堪称“万能魔术键”，让您尽享调光乐趣
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:60%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">万能魔术键</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">TAIL HANDSTAND</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    在尾部开关不断电的情况下，它还可以记忆上次侧按关机时的亮度<br/>堪称“万能魔术键”，让您尽享调光乐趣
                </p>
            </div>       
        </div>
        <!--使用说明图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-015.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-015-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:25%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    完美配件
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    PERFECT ACCESSORY
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    T40CS PLUS 随机赠送了五个橡胶环，三个安装完备<br/>两个随配件赠送，当五个橡胶环全部安装于筒身之后，可起到防冷、隔热的作用<br/>让您握持手电更加舒适，不惧寒冷和炎热，更贴心更实用
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:8%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">完美配件</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">PERFECT ACCESSORY</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    T40CS PLUS 随机赠送了五个橡胶环，三个安装完备<br/>两个随配件赠送，当五个橡胶环全部安装于筒身之后，可起到防冷、隔热的作用<br/>让您握持手电更加舒适，不惧寒冷和炎热，更贴心更实用
                </p>
            </div>       
        </div>
        <!--使用说明图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-016.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-016-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    完美追求 T40CS PLUS
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    INTELLIGENT VOLTAGE PROTECTION
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    T40CS Plus 既能满足您对打猎、警戒、搜索等有特殊环境下<br/>苛刻的照明需求，也能让您日常照明称心如意！
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">完美追求 T40CS PLUS</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">INTELLIGENT VOLTAGE PROTECTION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    T40CS Plus 既能满足您对打猎、警戒、搜索等有特殊环境下<br/>苛刻的照明需求，也能让您日常照明称心如意！
                </p>
            </div>       
        </div>
        <!--使用说明图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-017.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T40CS PLUS/T40CS-PLUS-017-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:10%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    四档常亮
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ONE KEY FOUR
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    极亮档（1488流明，持续点亮三分钟后，自动降为高亮档）<br/>高亮档（1000流明，续航2小时）<br/>中亮档（430流明，续航4小时）<br/>低亮档（70流明，续航28小时）
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ed; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ef; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ee; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f1;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">四档常亮</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ONE KEY FOUR</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    极亮档（1488流明，持续点亮三分钟后，自动降为高亮档）<br/>高亮档（1000流明，续航2小时）<br/>中亮档（430流明，续航4小时）<br/>低亮档（70流明，续航28小时）
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ed;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ef;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ee;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f1;</span>
                </div>
            </div>       
        </div>

        <!--产品参数-->
        <div id="参数" class="cpmd">
            <div class="container">
                <div class="row hidden-xs" style="height:50px;"></div>
                <div class="row visible-xs-block" style="height:20px;"></div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="cpmd-title">T40CS-PLUS 产品参数</div>
                        <div>首页/产品中心/T40CS-PLUS/参数</div>
                    </div>
                    <div class="col-xs-3 cpmd-titleIco">
                        <span class="iconfont">&#xe621;</span>
                    </div>
                </div>
                <div class="row hidden-xs" style="height:50px;"></div>
                <div class="row visible-xs-block" style="height:20px;"></div>
            </div>
        </div>
        <div class="cpmd2">
            <div class="container">
                <div class="row proDetail-imgbox">
                    <div class="col-xs-12" style="text-align:center;margin-bottom: 60px;">
                        <img src="images/T40CS PLUS/T40CS-PLUS-018.png" class="img-responsive" style="display:inline;">
                    </div>
                </div>
                <div class="row proDetail">
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe634;</i>
                        <span>筒身长度 225mm</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe636;</i>
                        <span>头部直径 64mm</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe635;</i>
                        <span>尾部直径 25.5mm</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe637;</i>
                        <span>Cree XM-L2 U3 LED</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe638;</i>
                        <span>最大输出 380 流明</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe639;</i>
                        <span>最大射程 500 米</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63a;</i>
                        <span>材质  铝合金</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63b;</i>
                        <span>产品重量 93.4g（不含电池）</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63c;</i>
                        <span>使用电池 1×CR123</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63d;</i>
                        <span>续航时间 16流明，续航80小时</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63e;</i>
                        <span>IPX-8级防水</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63f;</i>
                        <span>光杯种类 光面</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe640;</i>
                        <span>特殊模式 SOS, 信标, 暴闪</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe641;</i>
                        <span>色温类型 白光</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe642;</i>
                        <span>应用场景 工具, 户外/露营, 搜索</span>
                    </div>
                </div>
            </div>
        </div>

    <!--产品配件-->
        <div id="配件" class="cpmd">
            <div class="container">
                <div class="row hidden-xs" style="height:50px;"></div>
                <div class="row visible-xs-block" style="height:20px;"></div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="cpmd-title">T40CS-PLUS 产品配件</div>
                        <div>首页/产品中心/T40CS-PLUS/配件</div>
                    </div>
                    <div class="col-xs-3 cpmd-titleIco">
                        <span class="iconfont">&#xe622; </span>
                    </div>
                </div>
                <div class="row hidden-xs" style="height:50px;"></div>
                <div class="row visible-xs-block" style="height:20px;"></div>
            </div>
        </div>
        <div class="cpmd2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="p-detailImgBox">
                            <img data-original="images/T40CS PLUS/T40CS-PLUS-019.jpg" class="img-responsive hidden-xs">
                            <img data-original="images/T40CS PLUS/T40CS-PLUS-019-s.jpg" class="img-responsive visible-xs-inline">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos3">
                    <img src="images/T40CS PLUS/T40CS-PLUS-020-l.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexL">
                    <div class="rightNavFlexA">
                        <a href="javascript:advNavBar.changeTab(2);" onmouseenter='$("#navLimgPos3").fadeIn();' onmouseout='$("#navLimgPos3").fadeOut();'>
                            <div class="rightTipsArrow">
                                <img src="images/larrow.png" alt="">
                            </div>
                            <div class="rightTipsTextA">
                                PREV<br />
                                场景 SCENE
                            </div>                            
                        </a>
                    </div>                    
                </div>
                <div class="col-sm-6 navRimgPos" style="display:none" id="navRimgPos3">
                    <img src="images/T40CS PLUS/T40CS-PLUS-020-r.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexR">
                    <div class="leftNavFlex">
                        <div class="navWhatTextA">Why wait ? Order yours now .</div>
                        <div class="navNowBuyA">
                            <a href="http://item.jd.com/11646351145.html" target="view_window" onmouseenter='$("#navRimgPos3").fadeIn();' onmouseout='$("#navRimgPos3").fadeOut();'>立即购买</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!--右侧指示器 by 2017-06-09-->
<!--     <div class="zhishiqi">
        <ul>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </div> -->
    
    <!--底部分类翻转-->
    <?php
        require("inc/psixpic.php");
    ?>

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
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/mc.public.js"></script>
    <script type="text/javascript" src="js/mc.npage.js"></script>
    <script type="text/javascript" src="js/mc.advpage.js"></script>
</body>
</html>