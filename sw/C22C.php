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
    <title>SUNWAYMAN-炫卫者官网-C22C</title>
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
                <img src="images/C22C/c22c-001.jpg" class="img-responsive hidden-xs">
                <img src="images/C22C/c22c-001-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:20%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 30px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">C22C</div>
                <div class="wow bounceInRight" style="font-size: 36px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">业界领先，手电、L型灯和谐统一</div>
                <div class="wow bounceInRight" style="font-size: 20px;line-height: 50px;" data-wow-duration="1s" data-wow-delay="0.8s">380流明 双灯同亮“夜行者”</div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#xingqing">产品详情</a></div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:90%;left:10%;overflow:hidden;top:5%;text-align:left;position: absolute;color: #fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 18px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">C22C</div>
                <div class="wow bounceInRight" style="font-size: 22px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">业界领先，手电、L型灯和谐统一</div>
                <div class="wow bounceInRight" style="font-size: 16px;line-height: 50px;" data-wow-duration="1s" data-wow-delay="0.8s">380流明 双灯同亮“夜行者”</div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#xingqing">产品详情</a></div>
            </div>
        </div>
        <!--场景-->
        <div class="products-showBox" id="products-showBox" v-show="nv2Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/C22C/c22c-008.jpg" class="img-responsive hidden-xs">
                <img src="images/C22C/c22c-008-s.jpg" class="img-responsive visible-xs-inline">
            </div>
        </div>
        <!--参数-->
        <div class="products-showBox" id="products-showBox" v-show="nv3Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/C22C/c22c-014.jpg" class="img-responsive hidden-xs">
                <img src="images/C22C/c22c-014-s.jpg" class="img-responsive visible-xs-inline">
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
                    <div><a href="http://item.jd.com/10983744069.html" target="view_window"><span class="hidden-xs">SHOP </span>购买</a></div>
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
                <img data-original="images/C22C/c22c-002.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-002-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全金属机身·小巧精致·隐秘之至
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ELEGANT COPPER EDITION
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    筒身紧凑，单手操作，隐秘性极强，可随身携带<br/>
                    行业精品，工艺缔造品质
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f5; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f4; </span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:5%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全金属机身·小巧精致·隐秘之至</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ELEGANT COPPER EDITION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    筒身紧凑，单手操作，隐秘性极强，可随身携带<br/>
                    行业精品，工艺缔造品质
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f5; </span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f4; </span>
                </div>
            </div>      
        </div>
        <!--详情图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-003.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-003-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    双灯功能，照明利器
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    FITS EASILY INTO A POCKET
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    双灯功能，头部白灯，最亮1000流明，满足亮度需求<br/>侧灯中白光LED，补充其它照明需求<br/>显色性好，穿透力强，有雾天气，照明利器
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"></div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">双灯功能，照明利器</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">FITS EASILY INTO A POCKET</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    双灯功能，头部白灯，最亮1000流明，满足亮度需求<br/>侧灯中白光LED，补充其它照明需求<br/>显色性好，穿透力强，有雾天气，照明利器
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"></div>
            </div>       
        </div>
        <!--详情图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-004.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-004-s.jpg" class="img-responsive visible-xs-inline">
            </div> 
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:35%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    主灯与侧灯显色性对比
                </div>                
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">           </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6d9;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">主灯与侧灯显色性对比</h3>
                
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">  </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6d9;</span>
                </div>
            </div>       
        </div>
        <!--详情图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-005.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-005-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    精选灯源
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    FITS EASILY INTO A POCKET
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    主灯精选CREE XM-L2 U2 LED核心，最高亮可达1000流明<br />侧灯采用一颗CREE XP-G2 R5 LED，最高180流明
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe704; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe706;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">精选灯源</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">FITS EASILY INTO A POCKET</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    主灯精选CREE XM-L2 U2 LED核心，最高亮可达1000流明<br />侧灯采用一颗CREE XP-G2 R5 LED，最高180流明
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
                <img data-original="images/C22C/c22c-006.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-006-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;bottom:15%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="1s" data-wow-delay="0s">
                    尾部磁铁
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                    TAIL MAGNET
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 25px;margin-top:20px;" data-wow-duration="1s" data-wow-delay="0.8s">
                   尾部安装强力磁铁，可轻松将手电置于各种角度的铁质表面上<br/>筒头方形防滚动设计，即可扩大散热面积也可防止滚动作<br/>全球一流智能记忆芯片，在主副灯不切换是状态下自动记忆上次关机时的亮度
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6d8; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6dc; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e6;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:5%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;" data-wow-duration="1s" data-wow-delay="0s">尾部磁铁</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;line-height:40px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="1s" data-wow-delay="0.5s">TAIL MAGNET</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                   尾部安装强力磁铁，可轻松将手电置于各种角度的铁质表面上<br/>筒头方形防滚动设计，即可扩大散热面积也可防止滚动作<br/>全球一流智能记忆芯片，在主副灯不切换是状态下自动记忆上次关机时的亮度
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6d8;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6dc;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e6;</span>
                </div>
            </div>        
        </div>
        <!--详情图片6-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-007.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-007-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:10%;text-align:right;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    防爆专家
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ELEGANT COPPER EDITION
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    紧急情况下可击破玻璃或者其它物质障碍
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ea;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:15%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">防爆专家</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ELEGANT COPPER EDITION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    紧急情况下可击破玻璃或者其它物质障碍
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ea;</span>
                </div>
            </div>         
        </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos1">
                    <img src="images/C22C/c22c-022-l.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexL">
                    <div class="leftNavFlex">
                        <div class="navWhatText">Why wait ? Order yours now .</div>
                        <div class="navNowBuy">
                            <a href="http://item.jd.com/10983744069.html" target="view_window" onmouseenter='$("#navLimgPos1").fadeIn();' onmouseout='$("#navLimgPos1").fadeOut();'>立即购买</a>
                        </div>
                    </div>                    
                </div>
                <div class="col-sm-6 navRimgPos" style="display:none" id="navRimgPos1">
                    <img src="images/C22C/c22c-022-r.png" class="img-responsive">
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
                <img data-original="images/C22C/c22c-009.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-009-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    梯形螺纹，顺滑可靠
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    AS LOW AS 30ΜA STANDBY CURRENT
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    智能低电压保护功能，保护电池不过放
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe705; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe709; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe707;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:8%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">梯形螺纹，顺滑可靠</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">AS LOW AS 30ΜA STANDBY CURRENT</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    智能低电压保护功能，保护电池不过放
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe705;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe709; </span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe707;</span>
                </div>
            </div>       
        </div>
        <!--场景图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-010.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-010-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:10%;text-align:center;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    电子防反、微电流待机
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    AS LOW AS 30ΜA STANDBY CURRENT
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    可靠的电子防反接功能，即使无意装反电池，手电绝不损伤<br/>
                    微电流待机，待机电流不超过30uA，可使手电安全长期待机
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ec;</span>
            </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:40%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">电子防反、微电流待机</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">AS LOW AS 30ΜA STANDBY CURRENT</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    可靠的电子防反接功能，即使无意装反电池，手电绝不损伤<br/>
                    微电流待机，待机电流不超过30uA，可使手电安全长期待机
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
                <img data-original="images/C22C/c22c-011.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-011-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    精密IPX-8防水设计
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    CONVEX LENS WITH AS HIGH
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    精密IPX-8级防水设计，可工作于水下两米
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe716;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">精密IPX-8防水设计</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">CONVEX LENS WITH AS HIGH</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    精密IPX-8级防水设计，可工作于水下两米
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:50px;color:#009a44;">&#xe716;</span>
                </div>
            </div>       
        </div>
        <!--场景图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-012.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-012-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:30%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    多功能设计
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    CONVEX LENS WITH AS HIGH AS 
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    高档不锈钢手电抱夹，可牢靠挂于背包、口袋等位置%<br/>
                    尾部平整，可以倒立于水平面，充当蜡烛使用
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">多功能设计</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">CONVEX LENS WITH AS HIGH AS </h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    高档不锈钢手电抱夹，可牢靠挂于背包、口袋等位置%<br/>
                    尾部平整，可以倒立于水平面，充当蜡烛使用
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>       
        </div>
        <!--场景图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-013.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-013-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    白光主灯LED照明时的档位亮度和续航如下
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">           </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                极亮档（1000流明，持续点亮三分钟后，自动降为高亮档）<br />高亮档（580流明，续航2小时）<br />中高亮档（130流明，续航10小时）<br />低亮档（35流明，续航30小时）<br />爆闪档：SOS档
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ed; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ef; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ee; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f1; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f0;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">白光主灯LED照明时的档位亮度和续航如下</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s"> </h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    极亮档（1000流明，持续点亮三分钟后，自动降为高亮档）<br />高亮档（580流明，续航2小时）<br />中高亮档（130流明，续航10小时）<br />低亮档（35流明，续航30小时）<br />爆闪档：SOS档
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ed;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ef;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ee;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f1;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f0;</span>
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
                        <div class="cpmd-title">C22C 产品卖点</div>
                        <div>首页/产品中心/C22C/卖点</div>
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
                            主灯采用一颗Cree XM-L2 U2 LED，侧灯采用一颗CREE XP-G2 R5 LED
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            尾部配备高强度吸附力磁铁，可方便固定于任何角度的铁质表面
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            尾部配备高强度钨钢材质击玻器
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            恒流电路，亮度恒定
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            有效射程达208米
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            使用一节18650电池电池或者两节CR123A电池
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            工作电压：2.8~8.4V 
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            主灯采用优质金属光面反光杯，兼顾聚光和泛光，光斑完美 侧灯采用透镜
                        </li>
                        <li class="col-xs-12 col-sm-6">
                            <span class="iconfont"></span>
                            重量：88.3g（不含电池）
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
                            附件：防水O圈、手绳、抱夹
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos2">
                    <img src="images/C22C/c22c-022-l.png" class="img-responsive">
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
                    <img src="images/C22C/c22c-022-r.png" class="img-responsive">
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
                        <div class="cpmd-title">C22C 使用说明</div>
                        <div>首页/产品中心/C22C/使用</div>
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
                        <p>开启/关闭手电筒白灯和中白灯</p>
                        1、开启手电筒白灯：按下侧按开关，听到一声轻响，白光开启； <br/>
                        2、开启手电筒中白灯：深按侧按开关不松手，等手电亮灯时，此时即为中白光开启；<br/>3、同时开启白灯、中白灯：迅速双击侧键，并按住侧键不松手，即可同时点亮白灯和中白灯；<br/>4、关闭手电筒：不论是何种亮度模式下，再次按下侧按开关，听到一声轻响，手电筒关闭；<br/><br/>
                        <p>调光方法</p>
                        白灯操作方法：<br/>1、白灯分极高、高、中、低、爆闪、SOS六档，当切换到白灯时，长按头部按键将循环；<br/>
                        2、当白灯在极高、高、中、低四档点亮时，双击可调出爆闪，3秒内再次双击调出SOS，如此循环。<br/>中白光操作方法：<br/>1、中白灯分高、中、低、爆闪、SOS五档，当切换到中白灯时，长按头部按键为高中低循环；<br/>2、当中白灯分高、中、低亮度模式时，双击爆闪，3秒内再次双击为SOS循环。
                    </div>
                    <div class="col-xs-12 col-sm-3 usegrid-ico">
                        <a href="javascript:download('file/C22C-Instructions.doc', 'C22C-Instructions.doc');"><span class="iconfont">&#xe620; </span></a>
                    </div>
                </div>
            </div>
        </div>
        <!--使用说明图片1-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-015.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-015-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    供电系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    POWER SUPPLY SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    体积适中的单节18650（或2*CR123A）供电系统<br/>
                    在体积、亮度、便携三方面达到完美平衡<br/>
                    18650电池，普及型锂电池，广泛应用在电动车（例如：特斯拉）<br/>笔记本电脑等领域，体积小、重量轻、容量大、耐高低
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe715; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe71a;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:60%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">供电系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">POWER SUPPLY SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    体积适中的单节18650（或2*CR123A）供电系统<br/>
                    在体积、亮度、便携三方面达到完美平衡<br/>
                    18650电池，普及型锂电池，广泛应用在电动车（例如：特斯拉）<br/>笔记本电脑等领域，体积小、重量轻、容量大、耐高低
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe715;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe71a;</span>
                </div>
            </div>       
        </div>
        <!--使用说明图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-016.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-016-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    双灯功能，照明利器
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    LOCKING FUNCTION
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    具有双灯功能，头部白灯，最亮1000流明，满足亮度需求<br/>
                    侧灯中白光LED，补充其它照明需求，显色性好，穿透力强，有雾天气，照明利器
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6d9;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">双灯功能，照明利器</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LOCKING FUNCTION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    具有双灯功能，头部白灯，最亮1000流明，满足亮度需求<br/>
                    侧灯中白光LED，补充其它照明需求，显色性好，穿透力强，有雾天气，照明利器
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:50px;color:#009a44;">&#xe6d9;</span>
                </div>
            </div>       
        </div>
        <!--使用说明图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C22C/c22c-017.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C22C/c22c-017-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:30%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    急救钨钢击玻器
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    LOCKING FUNCTION
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    尾盖配置钨钢击玻器，在紧急情况下可击碎玻璃，破解危难境地
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ea;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">急救钨钢击玻器</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LOCKING FUNCTION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    尾盖配置钨钢击玻器，在紧急情况下可击碎玻璃，破解危难境地
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ea;</span>
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
                        <div class="cpmd-title">C22C 产品参数</div>
                        <div>首页/产品中心/C22C/参数</div>
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
                        <img src="images/C22C/C22C-021.png" class="img-responsive" style="display:inline;">
                    </div>
                </div>
                <div class="row proDetail">
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe634;</i>
                        <span>筒身长度 110mm</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe636;</i>
                        <span>头部直径 28 mm</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe635;</i>
                        <span>尾部直径 25 mm</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe637;</i>
                        <span>主Cree XM-L2 U2 LED，侧CREE XP-G2 R5 LED</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe638;</i>
                        <span>最大输出 1000 流明</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe639;</i>
                        <span>最大射程 208 米</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63a;</i>
                        <span>材质  铝合金</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63b;</i>
                        <span>产品重量 88.3g（不含电池）</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63c;</i>
                        <span>使用电池 1 × 18650, 2 × CR123</span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                        <i class="iconfont">&#xe63d;</i>
                        <span>续航时间 27流明（60个小时）</span>
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
                            <img data-original="images/C22C/c22c-018.jpg" class="img-responsive hidden-xs">
                            <img data-original="images/C22C/c22c-018-s.jpg" class="img-responsive visible-xs-inline">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos3">
                    <img src="images/C22C/c22c-022-l.png" class="img-responsive">
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
                    <img src="images/C22C/c22c-022-r.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexR">
                    <div class="leftNavFlex">
                        <div class="navWhatTextA">Why wait ? Order yours now .</div>
                        <div class="navNowBuyA">
                            <a href="http://item.jd.com/10983744069.html" target="view_window" onmouseenter='$("#navRimgPos3").fadeIn();' onmouseout='$("#navRimgPos3").fadeOut();'>立即购买</a>
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