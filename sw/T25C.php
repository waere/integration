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
    <title>SUNWAYMAN-炫卫者官网-T25C</title>
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
                <img src="images/T25C/T25C-001.jpg" class="img-responsive hidden-xs">
                <img src="images/T25C/T25C-001-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 30px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">T25C</div>
                <div class="wow bounceInRight" style="font-size: 36px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">凸透镜的光明之旅</div>
                <div class="wow bounceInRight" style="font-size: 20px;line-height: 50px;" data-wow-duration="1s" data-wow-delay="0.8s"></div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#xiangqing">产品详情</a></div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:75%;left:10%;overflow:hidden;bottom:15%;text-align:center;position: absolute;color: #fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 18px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">T25C</div>
                <div class="wow bounceInRight" style="font-size: 22px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">凸透镜的光明之旅</div>
                <div class="wow bounceInRight" style="font-size: 16px;line-height: 50px;" data-wow-duration="1s" data-wow-delay="0.8s"></div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#xiangqing">产品详情</a></div>
            </div>
        </div>
        <!--场景-->
        <div class="products-showBox" id="products-showBox" v-show="nv2Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T25C/T25C-009.jpg" class="img-responsive hidden-xs">
                <img src="images/T25C/T25C-009-s.jpg" class="img-responsive visible-xs-inline">
            </div>
        </div>
        <!--参数-->
        <div class="products-showBox" id="products-showBox" v-show="nv3Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T25C/T25C-014.jpg" class="img-responsive hidden-xs">
                <img src="images/T25C/T25C-014-s.jpg" class="img-responsive visible-xs-inline">
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
                    <div><a href="http://item.jd.com/11563745630.html" target="view_window"><span class="hidden-xs">SHOP </span>购买</a></div>
                </div>
            </div>
        </div>
    </div>
    <!--详情-->
    <div id="advDetail" v-show="nv1Status">
        <!--详情图片1-->
        <div class="p-detailBox" id="xiangqing">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-002.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-002-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:10%;text-align:center;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全金属机身·粗犷大方
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ALL METAL FUSELAGE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    设计风格粗犷大方，大小适中，采用尾部战术开关，可实现战术点亮<br/>业界为数不多的经典变焦、凸透镜手电之一
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe70e; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe713; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe712; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe711;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全金属机身·粗犷大方</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ALL METAL FUSELAGE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    设计风格粗犷大方，大小适中，采用尾部战术开关，可实现战术点亮<br/>业界为数不多的经典变焦、凸透镜手电之一
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
                <img data-original="images/T25C/T25C-003.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-003-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:30%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    光学凸透镜系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    OPTICAL CONVEX LENS SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    38MM直径官学凸透镜，选用镜片级大型凸透镜<br/>直径38MM 凸透镜透光率达97%
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6eb;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:12%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">光学凸透镜系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">OPTICAL CONVEX LENS SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    38MM直径官学凸透镜，选用镜片级大型凸透镜<br/>直径38MM 凸透镜透光率达97%
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6eb;</span>
                </div>
            </div>       
        </div>
        <!--详情图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-004.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-004-s.jpg" class="img-responsive visible-xs-inline">
            </div> 
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:10%;text-align:center;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    快速远近调焦系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    FAST DISTANCE FOCUSING SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                旋转灯头，快速调焦，最左为 最散光状态，最右为最聚光状态<br/>凸透镜的平移行程约10MM
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6df;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:5%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">快速远近调焦系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">FAST DISTANCE FOCUSING SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                旋转灯头，快速调焦，最左为 最散光状态，最右为最聚光状态<br/>凸透镜的平移行程约10MM
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6df;</span>
                </div>
            </div>       
        </div>
        <!--详情图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-005.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-005-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:30%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    顶级LED光源
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    TOP LED LIGHT SOURCE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    美国顶级LED供应商 CREE XM-L2 U3 LED， 亮度高达880流明
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe704; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe706;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">顶级LED光源</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">TOP LED LIGHT SOURCE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    美国顶级LED供应商 CREE XM-L2 U3 LED， 亮度高达880流明
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe704;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe706;</span>
                </div>
            </div>        
        </div>
        <!--详情图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-006.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-006-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:40%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="1s" data-wow-delay="0s">
                    浪漫酒吧射灯
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                    ROMANTIC BAR
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 25px;margin-top:20px;" data-wow-duration="1s" data-wow-delay="0.8s">
                   手电点亮时八个小孔透出活泼 的八条光线，轻轻旋转，仿似置 身于优雅酒吧的活泼光线之中<br/>在暗夜的环境之中，八个小孔透出的光可以实现近距照明，兼顾前方和脚下。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s"> </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;" data-wow-duration="1s" data-wow-delay="0s">浪漫酒吧射灯</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;line-height:40px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="1s" data-wow-delay="0.5s">ROMANTIC BAR</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                   手电点亮时八个小孔透出活泼 的八条光线，轻轻旋转，仿似置 身于优雅酒吧的活泼光线之中<br/>在暗夜的环境之中，八个小孔透出的光可以实现近距照明，兼顾前方和脚下。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>        
        </div>
        <!--详情图片6-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-007.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-007-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    智慧型调光系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    INTELLIGENT DIMMING SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    轻按尾部按钮即可点亮手电初次点亮手电<br/>亮度是极高亮再次轻按尾部按钮，亮度在极高亮、低亮、中亮、高亮中
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e5;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">智慧型调光系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">INTELLIGENT DIMMING SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    轻按尾部按钮即可点亮手电初次点亮手电<br/>亮度是极高亮再次轻按尾部按钮，亮度在极高亮、低亮、中亮、高亮中
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e5;</span>
                </div>
            </div>         
        </div>
        <!--详情图片7-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-008.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-008-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    智能记忆长时间供电
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    LONG TIME POWER SUPPLY
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    使用体积适中的单节18650（或2*CR123A，RCR123、16340）供电系统<br/>微电流待机，待机电流不超 过30uA，可使手电安全长期待机<br/>全球一流智能记忆芯片，自动记忆上次关机时的亮度，贴心呵护
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e6; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e2;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">智能记忆长时间供电</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LONG TIME POWER SUPPLY</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    使用体积适中的单节18650（或2*CR123A，RCR123、16340）供电系统<br/>微电流待机，待机电流不超 过30uA，可使手电安全长期待机<br/>全球一流智能记忆芯片，自动记忆上次关机时的亮度，贴心呵护
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e6;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e2;</span>
                </div>
            </div>         
        </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos1">
                    <img src="images/T25C/T25C-020.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexL">
                    <div class="leftNavFlex">
                        <div class="navWhatText">Why wait ? Order yours now .</div>
                        <div class="navNowBuy">
                            <a href="http://item.jd.com/11563745630.html" target="view_window" onmouseenter='$("#navLimgPos1").fadeIn();' onmouseout='$("#navLimgPos1").fadeOut();'>立即购买</a>
                        </div>
                    </div>                    
                </div>
                <div class="col-sm-6 navRimgPos" style="display:none" id="navRimgPos1">
                    <img src="images/T25C/T25C-021.png" class="img-responsive">
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
                <img data-original="images/T25C/T25C-010.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-010-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    航空T6级铝材
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    AVIATION GRADE ALUMINUM T6
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    军规三级氧化，双色可选（黑色、自然色）耐磨、防汗、防腐蚀
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe70e; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe713; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe712; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe711;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:8%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">航空T6级铝材</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">AVIATION GRADE ALUMINUM T6</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    军规三级氧化，双色可选（黑色、自然色）耐磨、防汗、防腐蚀
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe70e;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe713;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe712;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe711;</span>
                </div>
            </div>       
        </div>
        <!--场景图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-011.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-011-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:100%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    电子防反接电路
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
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
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">电子防反接电路</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ELECTRONIC ANTI REVERSE CIRCUIT</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
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
                <img data-original="images/T25C/T25C-012.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-012-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:8%;text-align:right;position:absolute;color:#fff;">
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
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:5%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">IPX-8 防水标准</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">IPX-8 WATERPROOF STANDARD</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
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
                <img data-original="images/T25C/T25C-013.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-013-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:30%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    尾部倒立
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    TAIL HANDSTAND
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    尾部平整，可以倒立于水平面，充当蜡烛使用。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6dd;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:5%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">尾部倒立</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">TAIL HANDSTAND</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    尾部平整，可以倒立于水平面，充当蜡烛使用。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6dd;</span>
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
                    <div class="cpmd-title">T25C 产品卖点</div>
                    <div>首页/产品中心/T25C/卖点</div>
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
                        采用一颗Cree XM-L2 U3 LED，寿命均长达50,000小时
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        侧按开关，五个挡位
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        恒流电路，亮度恒定
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        使用一节18650或二节CR123A（16340）
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        工作电压：2.8~4.2V
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        采用透光率达97%以上的凸透镜
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        附件：防水O圈、手绳
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        体积：150mm (长) x45mm(头部直径)x26mm（尾部直径）
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        重量：176g（不含电池））
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        采用航天级铝合金制造
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        低电压保护功能
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        IPX-8级防水
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        军规三级硬质氧化
                    </li>
                </ul>
            </div>
        </div>
    </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos2">
                    <img src="images/T25C/T25C-020.png" class="img-responsive">
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
                    <img src="images/T25C/T25C-021.png" class="img-responsive">
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
                        <div class="cpmd-title">C13R 使用说明</div>
                        <div>首页/产品中心/C13R/使用</div>
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
                        <p>一、开启/关闭手电筒</p>
                        1、开启手电筒：按下侧按开关，听到一声轻响，手电开启； <br/>
                        2、关闭手电筒：不论是何种亮度模式下，再次按下侧按开关，听到一声轻响，手电筒关闭。<br/><br/>
                        <p>二、调光方法</p>
                        1、白灯分极高、高、中、低、爆闪、SOS、航闪、月光模式八档，长按头部按键将循环；<br/>2、当手电在极高、高、中、低四档点亮时，双击可调出爆闪，3秒内再次双击调出SOS，如此循环。<br/>中白光操作方法：<br/>3、月光模式说明：在关机且未锁键的情况下长按关机进入月光模式，再按进入普通调光。<br/>4、手电按键锁定功能。<br/><br/>*短按一次按键，再迅速长按（两秒以内），LED闪烁一次，即可锁定按键，解锁亦然；<br/>*防止手电置于口袋，旅行袋，背包中无意打开手电，造成不必要的照明浪费，损耗电池，耽误工作
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
                <img data-original="images/T25C/T25C-015.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-015-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:30%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    旋转变焦
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ROTATE ZOOM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    通过旋转头部变换焦距，可根据环境的照明需求自由<br/>调节聚光、泛光，满足多方位的需求<br/>兼具设计美感、活泼光线、近距照明的头部镂空设计<br/>头部镂空八个对称的直径为6MM的小，极具美感
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6df;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:5%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">旋转变焦</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ROTATE ZOOM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    通过旋转头部变换焦距，可根据环境的照明需求自由<br/>调节聚光、泛光，满足多方位的需求<br/>兼具设计美感、活泼光线、近距照明的头部镂空设计<br/>头部镂空八个对称的直径为6MM的小，极具美感
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6df;</span>
                </div>
            </div>                
        </div>
        <!--使用说明图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-016.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-016-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    智能电压保护
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">INTELLIGENT VOLTAGE PROTECTION</div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                恒流电路，亮度恒定，不闪烁，不伤眼，人性化照明 
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e9;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">智能电压保护</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">INTELLIGENT VOLTAGE PROTECTION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    恒流电路，亮度恒定，不闪烁，不伤眼，人性化照明 
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e9;</span>
                </div>
            </div>       
        </div>
        <!--使用说明图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T25C/T25C-017.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T25C/T25C-017-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:25%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    一键四档
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ONE KEY FOUR
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    极亮档（880流明，持续点亮三分钟后，自动降为高亮档）<br/> 高亮档（480流明，续航2小时）<br/>中亮档（200流明，续航6小时）<br/> 低亮档（17流明，续航60小时）
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
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">一键四档</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ONE KEY FOUR</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    极亮档：380流明，持续点亮三分钟后，自动降为高亮档<br/>高亮档：180流明，续航2小时<br/>中亮档：50流明，续航10小时<br/>低亮档：10流明，续航60小时<br/>爆闪档
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
                    <div class="cpmd-title">T25C 产品参数</div>
                    <div>首页/产品中心/T25C/参数</div>
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
                    <img src="images/T25C/T25C-018.png" class="img-responsive" style="display:inline;">
                </div>
            </div>
            <div class="row proDetail">
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe634;</i>
                    <span>筒身长度 150 mm</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe636;</i>
                    <span>头部直径 45 mm</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe635;</i>
                    <span>尾部直径 27 mm</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe637;</i>
                    <span>Cree XM-L2 U3 LED</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe638;</i>
                    <span>最大输出 880 流明</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe639;</i>
                    <span>最大射程 300 米</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe63a;</i>
                    <span>材质  铝合金</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe63b;</i>
                    <span>产品重量 116.6g（不含电池）</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe63c;</i>
                    <span>使用电池 1 × 18650, 2 × CR123</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe63d;</i>
                    <span>续航时间 17流明（60个小时）</span>
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
                    <div class="cpmd-title">C22C 产品配件</div>
                    <div>首页/产品中心/C22C/配件</div>
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
                        <img data-original="images/T25C/T25C-019.jpg" class="img-responsive hidden-xs">
                        <img data-original="images/T25C/T25C-019-s.jpg" class="img-responsive visible-xs-inline">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos3">
                    <img src="images/T25C/T20CC-020.png" class="img-responsive">
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
                    <img src="images/T25C/T25C-021.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexR">
                    <div class="leftNavFlex">
                        <div class="navWhatTextA">Why wait ? Order yours now .</div>
                        <div class="navNowBuyA">
                            <a href="http://item.jd.com/11563745630.html" target="view_window" onmouseenter='$("#navRimgPos3").fadeIn();' onmouseout='$("#navRimgPos3").fadeOut();'>立即购买</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
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