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
    <title>SUNWAYMAN-炫卫者官网-T60CS</title>
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
                <img src="images/T60CS/T60CS-001.jpg" class="img-responsive hidden-xs">
                <img src="images/T60CS/T60CS-001-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:20%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 35px;line-height: 60px;font-weight:400;" data-wow-duration="1s" data-wow-delay="0s">T60CS</div>
                <div class="wow bounceInRight" style="font-size: 36px;line-height: 60px;font-weight:400;" data-wow-duration="1s" data-wow-delay="0.5s">可充电三头侧按手电-2000流明</div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#xingqing">产品详情</a></div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:90%;left:10%;overflow:hidden;top:5%;text-align:left;position: absolute;color: #fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 18px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">T60CS</div>
                <div class="wow bounceInRight" style="font-size: 22px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">可充电三头侧按手电-2000流明</div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#xingqing">产品详情</a></div>
            </div>
        </div>
        <!--场景-->
        <div class="products-showBox" id="products-showBox" v-show="nv2Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T60CS/T60CS-007.jpg" class="img-responsive hidden-xs">
                <img src="images/T60CS/T60CS-007-s.jpg" class="img-responsive visible-xs-inline">
            </div>
        </div>
        <!--参数-->
        <div class="products-showBox" id="products-showBox" v-show="nv3Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T60CS/T60CS-013.jpg" class="img-responsive hidden-xs">
                <img src="images/T60CS/T60CS-013-s.jpg" class="img-responsive visible-xs-inline">
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
                    <div><a href="http://item.jd.com/12067853458.html" target="view_window"><span class="hidden-xs">SHOP </span>购买</a></div>
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
                <img data-original="images/T60CS/T60CS-002.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-002-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:10%;text-align:center;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    多功能轻触型侧按开关，调光新体验
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ALL METAL FUSELAGE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    贴心的系统锁定功能，避免您的手电在包里或者其他环境中意外打开手电！
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e5;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:15%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">多功能轻触型侧按开关，调光新体验</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ALL METAL FUSELAGE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    贴心的系统锁定功能，避免您的手电在包里或者其他环境中意外打开手电！
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e5;</span>
                </div>
            </div>      
        </div>
        <!--详情图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-003.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-003-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:8%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全金属机身 粗犷大方
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    OPTICAL CONVEX LENS SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    SUNWAYMAN T60CS是一款三灯头亮度<br/>最高达2000流明的新型便携式强光手电<br/>专为军警、搜索、打猎等对手电亮度和照距有极高要求的专业人士设计！
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"></div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:90%;overflow:hidden;left:5%;bottom:20%;text-align:left;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全金属机身 粗犷大方</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">OPTICAL CONVEX LENS SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="font-size: 10px;line-height:2;">
                    SUNWAYMAN T60CS是一款三灯头亮度<br/>最高达2000流明的新型便携式强光手电<br/>专为军警、搜索、打猎等对手电亮度和照距有极高要求的专业人士设计！
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"></div>
            </div>       
        </div>
        <!--详情图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-004.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-004-s.jpg" class="img-responsive visible-xs-inline">
            </div> 
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:35%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    三颗Cree XM-LU2 LED
                </div> 
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    OPTICAL CONVEX LENS SYSTEM
                </div>               
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    它最高亮高达2000流明，照射1000余米<br/>能满足您对打猎、警戒、搜索等有特殊环境下，苛刻的照明需求！
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe704; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe706;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">三颗Cree XM-LU2 LED</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">OPTICAL CONVEX LENS SYSTEM</h2>                
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    它最高亮高达2000流明，照射1000余米<br/>能满足您对打猎、警戒、搜索等有特殊环境下，苛刻的照明需求！
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe704;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe706;</span>
                </div>
            </div>       
        </div>
        <!--详情图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-005.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-005-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:8%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    专利的充电系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    TOP LED LIGHT SOURCE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    紧急情况下可以将手电倒立在充电座内，短暂的充当应急蜡烛使用<br/>（在没有合适的电池的情况下，空电池架也可导电，使手电发光）<br/><br/>注：T60CS专用充电座需要另外购买！
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:26%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">专利的充电系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">TOP LED LIGHT SOURCE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                紧急情况下可以将手电倒立在充电座内，短暂的充当应急蜡烛使用<br/>（在没有合适的电池的情况下，空电池架也可导电，使手电发光）<br/><br/>注：T60CS专用充电座需要另外购买！
                </p>
            </div>        
        </div>
        <!--详情图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-006.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-006-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:15%;right:10%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="1s" data-wow-delay="0s">
                    三灯头设计，最高亮2000流明
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                    ROMANTIC BAR
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 25px;margin-top:20px;" data-wow-duration="1s" data-wow-delay="0.8s">
                   全新工艺，三头专用反光杯<br/>聚光好，远射强，中心光斑完美，泛光均匀而柔和
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ed; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6fb;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;" data-wow-duration="1s" data-wow-delay="0s">三灯头设计，最高亮2000流明</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;line-height:40px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="1s" data-wow-delay="0.5s">ROMANTIC BAR</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                   全新工艺，三头专用反光杯<br/>聚光好，远射强，中心光斑完美，泛光均匀而柔和
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ed;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6fb;</span>
                </div>
            </div>        
        </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos1">
                    <img src="images/T60CS/T60CS-020-l.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexL">
                    <div class="leftNavFlex">
                        <div class="navWhatText">Why wait ? Order yours now .</div>
                        <div class="navNowBuy">
                            <a href="http://item.jd.com/12067853458.html" target="view_window" onmouseenter='$("#navLimgPos1").fadeIn();' onmouseout='$("#navLimgPos1").fadeOut();'>立即购买</a>
                        </div>
                    </div>                    
                </div>
                <div class="col-sm-6 navRimgPos" style="display:none" id="navRimgPos1">
                    <img src="images/T60CS/T60CS-020-r.png" class="img-responsive">
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
                <img data-original="images/T60CS/T60CS-008.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-008-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    尾部倒立
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    AVIATION GRADE ALUMINUM T6
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    可以倒立于水平面，充当蜡烛使用<br/><br/>T40CS PLUS专为战术应用而设计，尾部按钮在开机的时候始终锁住<br/>最亮档，不受侧按开关调光的影响
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6dd;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">尾部倒立</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">AVIATION GRADE ALUMINUM T6</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    可以倒立于水平面，充当蜡烛使用<br/><br/>T40CS PLUS专为战术应用而设计，尾部按钮在开机的时候始终锁住<br/>最亮档，不受侧按开关调光的影响
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6dd;</span>
                </div>
            </div>         
        </div>
        <!--场景图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-009.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-009-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:10%;text-align:center;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    独具创意的供电系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    TOP LED LIGHT SOURCE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    T60CS拥有独具创意的供电系统，带给您全新的感受<br/>全新设计的电池架，正确装入电池后，电池架正反两面可随意装配，不存在电池架反接的烦恼
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe709; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe70b;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:8%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">独具创意的供电系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">TOP LED LIGHT SOURCE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    T60CS拥有独具创意的供电系统，带给您全新的感受<br/>全新设计的电池架，正确装入电池后，电池架正反两面可随意装配，不存在电池架反接的烦恼
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe709;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe70b;</span>
                </div>
            </div>       
        </div>
        <!--场景图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-010.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-010-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:10%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    符合IPX-8防水标准
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    IPX-8 WATERPROOF STANDARD
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    非常适合户外摄影、搜索、露营等照明需求！
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe716;</span>
            </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">符合IPX-8防水标准</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">IPX-8 WATERPROOF STANDARD</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    非常适合户外摄影、搜索、露营等照明需求！
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
                <img data-original="images/T60CS/T60CS-011.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-011-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:30%;left:8%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全新的轻触式充电系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    A NEW LIGHT TOUCH CHARGING SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    充电底座设计精美，结构稳固<br/>即插即冲，随拿随用，方便快捷
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe715;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全新的轻触式充电系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">A NEW LIGHT TOUCH CHARGING SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    充电底座设计精美，结构稳固<br/>即插即冲，随拿随用，方便快捷
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:50px;color:#009a44;">&#xe715;</span>
                </div>
            </div>       
        </div>
        <!--场景图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-012.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-012-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:10%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    恒流电路，智能电压
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    CONSTANT CURRENT CIRCUIT 
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    三孔优质金属光面反光杯，兼顾聚光和泛光，光斑完美<br/>采用航天级铝合金制造，头部不锈钢压环。增韧超清晰钢化玻璃镜片，防刮耐磨
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe708;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:5%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">恒流电路，智能电压</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">CONSTANT CURRENT CIRCUIT</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    三孔优质金属光面反光杯，兼顾聚光和泛光，光斑完美<br/>采用航天级铝合金制造，头部不锈钢压环。增韧超清晰钢化玻璃镜片，防刮耐磨
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:50px;color:#009a44;">&#xe708;</span>
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
                        <div class="cpmd-title">T60CS 产品卖点</div>
                        <div>首页/产品中心/T60CS/卖点</div>
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
                            使用三颗Cree XM-L U2 LED，寿命长达50,000小时
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            侧按轻触式开关
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            一个极亮档、三个常亮档，隐藏爆闪档、SOS档
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            恒流电路，亮度恒定
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            有效射程达372.5米
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            使用三节18650电池电池或者六节CR123A（16340）电池
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            工作电压：1.2~3V
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            具有低电压警示灯
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            三孔优质金属光面反光杯，兼顾聚光和泛光，光斑完美
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            体积：89mm (长) * 26.5mm(头部直径)* 24 mm（尾部直径）
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            重量：125（不含电池）
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
                            附件：手电套、防水O圈
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos2">
                    <img src="images/T60CS/T60CS-020-l.png" class="img-responsive">
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
                    <img src="images/T60CS/T60CS-020-r.png" class="img-responsive">
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
                        <div class="cpmd-title">T60CS 使用说明</div>
                        <div>首页/产品中心/T60CS/使用</div>
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
                        <p>T60CS采用侧按轻触按钮，使用方法如下</p>
                        常规点亮：<br/>
                        轻按侧按轻触按钮，即可点亮手电，再次按下侧按按钮，即可关闭手电。手电首次通电后，第一次点亮手电，默认亮度为极高亮档；<br/><br/>
                        常规档位切换：<br/>手电常规亮度下，此时按下侧按按钮不松手，手电的档位即在极高-高-中-低档中循环，当循环到您所需要的亮度时，松开手指即可锁定亮度；手电具备记忆功能；<br/><br/>
                        调出隐藏档：<br/>
                        在手电非处于锁定的情况下，双击侧按按钮，即可调出隐藏的爆闪档；再次双击侧按按钮可调出隐藏的SOS档；<br/><br/>
                        锁定开关：<br/>
                        在手电处于关机状态的七秒后，快速短按再长按一次，手电即可进入锁定状态，即开关不能打开手电；如要解锁，再次短按再长按开关一次即可。                      
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
                <img data-original="images/T60CS/T60CS-014.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-014-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:15%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    宽电压设计
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    TAIL HANDSTAND
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    可以使用三节18650或者六节CR123A<br/>（使用16340时，不可以用手电充电座充电），电源供应无忧
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e1;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:60%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">宽电压设计</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">TAIL HANDSTAND</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    可以使用三节18650或者六节CR123A<br/>（使用16340时，不可以用手电充电座充电），电源供应无忧
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e1;</span>
                </div>
            </div>       
        </div>
        <!--使用说明图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-015.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-015-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:25%;right:10%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    多功能轻触式侧按开关
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    IPX-8 WATERPROOF STANDARD
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    多功能轻触式侧按开关，一键即可实现超低电流待机（50微安左右）<br/><br/>高中低三档调光、调出隐藏爆闪和SOS档位等多种功能<br/><br/>（低电压指示灯）
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">多功能轻触式侧按开关</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">IPX-8 WATERPROOF STANDARD</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    多功能轻触式侧按开关，一键即可实现超低电流待机（50微安左右）<br/>高中低三档调光、调出隐藏爆闪和SOS档位等多种功能<br/>（低电压指示灯）
                </p>
            </div>       
        </div>
        <!--使用说明图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-016.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-016-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:8%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    锁定开关
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    LOCKING FUNCTION
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    在手电处于关机状态的七秒后，快速短按再长按一次<br/>手电即可进入锁定状态，即开关不能打开手电<br/>如要解锁，再次短按再长按开关一次即可
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e3;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:8%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">锁定开关</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LOCKING FUNCTION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    在手电处于关机状态的七秒后，快速短按再长按一次<br/>手电即可进入锁定状态，即开关不能打开手电<br/>如要解锁，再次短按再长按开关一次即可
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:50px;color:#009a44;">&#xe6e3;</span>
                </div>
            </div>       
        </div>
        <!--使用说明图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T60CS/T60CS-017.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T60CS/T60CS-017-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:10%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全球一流智能记忆芯片器
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ONE KEY FOUR
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    全球一流智能记忆芯片，自动记忆上次关机时的亮度，贴心呵护
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e6;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:12%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全球一流智能记忆芯片</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ONE KEY FOUR</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    全球一流智能记忆芯片，自动记忆上次关机时的亮度，贴心呵护
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e6;</span>
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
                        <div class="cpmd-title">T60CS 产品参数</div>
                        <div>首页/产品中心/T60CS/参数</div>
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
                        <img src="images/T60CS/T60CS-018.png" class="img-responsive" style="display:inline;">
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
                        <div class="cpmd-title">T60CS 产品配件</div>
                        <div>首页/产品中心/T60CS/配件</div>
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
                            <img data-original="images/T60CS/T60CS-019.jpg" class="img-responsive hidden-xs">
                            <img data-original="images/T60CS/T60CS-019-s.jpg" class="img-responsive visible-xs-inline">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos3">
                    <img src="images/T60CS/T60CS-020-l.png" class="img-responsive">
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
                    <img src="images/T60CS/T60CS-020-r.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexR">
                    <div class="leftNavFlex">
                        <div class="navWhatTextA">Why wait ? Order yours now .</div>
                        <div class="navNowBuyA">
                            <a href="http://item.jd.com/12067853458.html" target="view_window" onmouseenter='$("#navRimgPos3").fadeIn();' onmouseout='$("#navRimgPos3").fadeOut();'>立即购买</a>
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