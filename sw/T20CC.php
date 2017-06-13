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
    <title>SUNWAYMAN-炫卫者官网-T20CC</title>
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
                <img src="images/T20CC/T20CC-001.jpg" class="img-responsive hidden-xs">
                <img src="images/T20CC/T20CC-001-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:20%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 30px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">T20CC</div>
                <div class="wow bounceInRight" style="font-size: 36px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">暴力唯美BOSS级手电</div>
                <div class="wow bounceInRight" style="font-size: 20px;line-height: 50px;" data-wow-duration="1s" data-wow-delay="0.8s"></div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#详情">产品详情</a></div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:90%;left:10%;overflow:hidden;top:5%;text-align:left;position: absolute;color: #fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 18px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">T20CC</div>
                <div class="wow bounceInRight" style="font-size: 22px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">暴力唯美BOSS级手电</div>
                <div class="wow bounceInRight" style="font-size: 16px;line-height: 50px;" data-wow-duration="1s" data-wow-delay="0.8s"></div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#">产品详情</a></div>
            </div>
        </div>
        <!--场景-->
        <div class="products-showBox" id="products-showBox" v-show="nv2Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T20CC/T20CC-009.jpg" class="img-responsive hidden-xs">
                <img src="images/T20CC/T20CC-009-s.jpg" class="img-responsive visible-xs-inline">
            </div>
        </div>
        <!--参数-->
        <div class="products-showBox" id="products-showBox" v-show="nv3Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/T20CC/T20CC-015.jpg" class="img-responsive hidden-xs">
                <img src="images/T20CC/T20CC-015-s.jpg" class="img-responsive visible-xs-inline">
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
                    <div><a href="http://item.jd.com/10987461323.html" target="view_window"><span class="hidden-xs">SHOP </span>购买</a></div>
                </div>
            </div>
        </div>
    </div>
    <!--详情-->
    <div id="advDetail" v-show="nv1Status">
        <!--详情图片1-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-002.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-002-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:10%;text-align:center;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全金属机身
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ALL METAL FUSELAGE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    筒身紧凑，单手操作，大小适中，手感舒适，可随身携带，工艺缔造品质。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f5; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f4;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全金属机身</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ALL METAL FUSELAGE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    筒身紧凑，单手操作，大小适中，手感舒适，可随身携带，工艺缔造品质。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f5;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f4;</span>
                </div>
            </div>      
        </div>
        <!--详情图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-003.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-003-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:35%;text-align:center;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    侧滑磁控
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    SIDESLIP MAGNETRON
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    SUNWAYMAN一小步，手电磁控一大步磁控手电，向来是高端手电的标杆之一<br/>即有侧控开关的方便、快捷的人机交换人性化<br/>又有磁控如丝滑般顺滑的舒适度！
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6dc;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:35%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">侧滑磁控</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">SIDESLIP MAGNETRON</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    SUNWAYMAN一小步，手电磁控一大步磁控手电，向来是高端手电的标杆之一<br/>即有侧控开关的方便、快捷的人机交换人性化<br/>又有磁控如丝滑般顺滑的舒适度！
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6dc;</span>
                </div>
            </div>      
        </div>
        <!--详情图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-004.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-004-s.jpg" class="img-responsive visible-xs-inline">
            </div> 
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    智能USB充电系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    INTELLIGENT USB CHARGING SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                点滴积累，长久动力<br/>智能控制芯片，恒速稳定充电<br/>加载防过充、过放程序，有效提升电池安全性50%<br/> 插入USB充电线后按下尾部开关<br/>红色指示灯亮，显示正在充电，<br/>指示灯亮绿色显示已充满。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe715; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe71a;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:8%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">智能USB充电系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">INTELLIGENT USB CHARGING SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                点滴积累，长久动力<br/>智能控制芯片，恒速稳定充电<br/>加载防过充、过放程序，有效提升电池安全性50%<br/> 插入USB充电线后按下尾部开关<br/>红色指示灯亮，显示正在充电，<br/>指示灯亮绿色显示已充满。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe715;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe71a;</span>
                </div>
            </div>       
        </div>
        <!--详情图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-005.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-005-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:8%;text-align:right;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    Micro-USB充电接口
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    CHARGING INTERFACE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    设计精美、精选高品质材料制作防护盖于筒体紧密贴合<br/>全方位守护，适应各类恶劣环境防沙、防尘、防水、防腐蚀<br/>全球通用Micro-USB接口<br/>可以使用的移动电源进行充电<br/>注：给手电充电时，请选用充电电池<br/>
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ff; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6fe;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:6%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">Micro-USB充电接口</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">CHARGING INTERFACE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    设计精美、精选高品质材料制作防护盖于筒体紧密贴合<br/>全方位守护，适应各类恶劣环境防沙、防尘、防水、防腐蚀<br/>全球通用Micro-USB接口<br/>可以使用的移动电源进行充电<br/>注：给手电充电时，请选用充电电池<br/>
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ff;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6fe;</span>
                </div>
            </div>        
        </div>
        <!--详情图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-006.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-006-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="1s" data-wow-delay="0s">
                    航空T6级铝材
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                    AVIATION GRADE ALUMINUM T6
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 25px;margin-top:20px;" data-wow-duration="1s" data-wow-delay="0.8s">
                   军规三级氧化，双色可选（黑色、自然色）耐磨、防汗、防腐蚀
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe70e; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe713; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe712; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe711;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;" data-wow-duration="1s" data-wow-delay="0s">航空T6级铝材</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;line-height:40px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="1s" data-wow-delay="0.5s">AVIATION GRADE ALUMINUM T6</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                   军规三级氧化，双色可选（黑色、自然色）耐磨、防汗、防腐蚀
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe70e; </span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe713; </span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe712; </span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe711;</span>
                </div>
            </div>        
        </div>
        <!--详情图片6-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-007.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-007-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:10%;text-align:center;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    供电系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    POWER SUPPLY SYSTEM
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    使用一节18650电池供电，为保证电路的最大输出效率，推荐使用SUNWAYMAN品牌的电池。<br/>兼容两节CR123A、RCR12 3、16340电池。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe702;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:15%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">供电系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">POWER SUPPLY SYSTEM</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    使用一节18650电池供电，为保证电路的最大输出效率，推荐使用SUNWAYMAN品牌的电池。<br/>兼容两节CR123A、RCR12 3、16340电池。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe702;</span>
                </div>
            </div>         
        </div>
        <!--详情图片7-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-008.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-008-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    “战国无双 ”暴力唯美
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ULTIMATE BLAST
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    钨钢传奇，爆破旋风，重新定义攻击型手电<br/>进可为防身利器，安全感倍增<br/>退可为爆破能手，突破车窗玻璃等障碍无压力
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ea;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:8%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">“战国无双 ”暴力唯美</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ULTIMATE BLAST</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    钨钢传奇，爆破旋风，重新定义攻击型手电<br/>进可为防身利器，安全感倍增<br/>退可为爆破能手，突破车窗玻璃等障碍无压力
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
                    <img src="images/T20CC/T20CC-020.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexL">
                    <div class="leftNavFlex">
                        <div class="navWhatText">Why wait ? Order yours now .</div>
                        <div class="navNowBuy">
                            <a href="http://item.jd.com/10987461323.html" target="view_window" onmouseenter='$("#navLimgPos1").fadeIn();' onmouseout='$("#navLimgPos1").fadeOut();'>立即购买</a>
                        </div>
                    </div>                    
                </div>
                <div class="col-sm-6 navRimgPos" style="display:none" id="navRimgPos1">
                    <img src="images/T20CC/T20CC-021.png" class="img-responsive">
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
                <img data-original="images/T20CC/T20CC-010.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-010-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    玻璃、光源、光杯
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    Glass, light source, light cup
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    钢化玻璃并经双面增透镀膜，透光率高，耐磨、耐摔<br/>美国顶级LED供应商，CREE XM-L2 U3 LED<br/>优质金属光面反光杯，在提供高效率反射效果的同时，使光斑的聚光<br/>泛光过渡温柔，让眼睛更舒适
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6fb; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6fc; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6fd;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:8%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">玻璃、光源、光杯</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">Glass, light source, light cup</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    钢化玻璃并经双面增透镀膜，透光率高，耐磨、耐摔<br/>美国顶级LED供应商，CREE XM-L2 U3 LED<br/>优质金属光面反光杯，在提供高效率反射效果的同时，使光斑的聚光<br/>泛光过渡温柔，让眼睛更舒适
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6fb;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6fc;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6fd;</span>
                </div>
            </div>       
        </div>
        <!--场景图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-011.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-011-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:100%;overflow:hidden;top:40%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    钨钢爆破攻击头
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    TUNGSTEN STEEL BLAST ATTACK HEAD
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    集成四柱钨钢爆破攻击头，突破车窗玻璃等障碍无压力
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ea;</span>
            </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:8%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">钨钢爆破攻击头</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">TUNGSTEN STEEL BLAST ATTACK HEAD</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    集成四柱钨钢爆破攻击头，突破车窗玻璃等障碍无压力
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ea;</span>
            </div>
            </div>       
        </div>
        <!--场景图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-012.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-012-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:25%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s"> IPX-8防水标准</div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">IPX-8 waterproof standard</div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    满足EDC携带、近距柔光照明，闲情自驾等多种照明需求<br/>还可以作为馈赠之佳品
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:15%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">IPX-8防水标准</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">IPX-8 waterproof standard</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    满足EDC携带、近距柔光照明，闲情自驾等多种照明需求<br/>还可以作为馈赠之佳品
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>       
        </div>
        <!--场景图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-013.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-013-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:10%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    三色炫彩
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    COLORFUL COLOR
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    1000流明CREE XM-L2 U3 LED白光主灯，辅以紫、红、绿三色各有起特色功能的副灯<br/>一支手电，独挡一面，应对更多场面，满足方方面面！
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:35%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">三色炫彩</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">COLORFUL COLOR</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    1000流明CREE XM-L2 U3 LED白光主灯，辅以紫、红、绿三色各有起特色功能的副灯<br/>一支手电，独挡一面，应对更多场面，满足方方面面！
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>       
        </div>
        <!--场景图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-014.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-014-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
      
            <!--文字动画框手机-->

        </div>       

        <!--产品卖点部分-->
    <div id="卖点" class="cpmd">
        <div class="container">
            <!--卖点标题-->
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
            <div class="row">
                <div class="col-xs-9">
                    <div class="cpmd-title">T20CC 产品卖点</div>
                    <div>首页/产品中心/T20CC/卖点</div>
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
                        侧按开关，五档三色
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
                        头部钨钢击玻器，攻击型手电
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        体积： 141mm (长) x32mm(头部直径)x25.4mm（尾部直径）
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        主灯采用优质金属光面反光杯，兼顾聚光和泛光，光斑完美
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        重量：116.6g（不含电池）
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        采用航天级铝合金制造
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        军规三级硬质氧化
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        低电压保护功能
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
                        附件：防水O圈、手绳
                    </li>
                </ul>
            </div>
        </div>
    </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos2">
                    <img src="images/T20CC/T20CC-020.png" class="img-responsive">
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
                    <img src="images/T20CC/T20CC-021.png" class="img-responsive">
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
                        <div class="cpmd-title">T20CC 使用说明</div>
                        <div>首页/产品中心/T20CC/使用</div>
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
                        <p>共有四种模式</p>
                        常亮模式（4档）、闪烁模式（3档）、月光模式、彩灯模式（3档）<br/><br/>
                        <p>按下尾部按键开机，滑块在下方时开机为彩灯模式，在上方时为常亮模式。</p>
                        （1）常亮模式下单击头部按键调光，低-中-高-极高4档循环，极高亮档超过3分钟自动降到高亮档。进入闪烁模式时为爆闪档，此模式下长按头部按键进入按键爆闪-SOS闪-航内3档循环单击头部按键退出此模式进入常亮模式，常亮模式下按头部按键进入月关模式，月光模式下长按头部按键进入常亮模式低亮档<br/>（2）滑动侧滑磁控按钮，在下方时进入彩灯模式，单击头部按键绿-紫-红顺序切换，滑块到上方回到之前的常亮档位<br/>中白光操作方法：<br/><br/>
                        <p>充电</p>
                        按下尾部按键，插入USB充电线红色指示灯灯亮，冲满电后绿色指示灯亮；拔出插头后才能点亮手电。<br/><br/>
                        <p>低电压保护功能</p>
                        （1）装上电池时红灯会闪烁提示电压，闪烁次数为电压整数部分，如3-4v之间闪3下，电压降到3V时红色指示灯常亮<br/>（2）使用4.2V电压，当电压降到2.8V时进入低电压保护程序，红色指示灯快闪，白灯慢闪5次后熄灭。
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
                <img data-original="images/T20CC/T20CC-016.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-016-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    四种调光模式，给您全新体验
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/hei.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    FOUR DIMMING MODE, GIVE YOU A NEW EXPERIENCE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    常亮模式（4档）、闪烁模式（3档）、月光模式、彩灯模式（3档）<br/>侧滑磁控按钮在下方时开机为彩灯模式，在上方时为常亮模式。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:30%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">四种调光模式，给您全新体验</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">FOUR DIMMING MODET</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    常亮模式（4档）、闪烁模式（3档）、月光模式、彩灯模式（3档）<br/>侧滑磁控按钮在下方时开机为彩灯模式，在上方时为常亮模式。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div> 
        </div>
        <!--使用说明图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/T20CC/T20CC-017.jpg" class="img-responsive hidden-xs">
                <img data-original="images/T20CC/T20CC-017-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    低电压智能保护
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LOW VOLTAGE INTELLIGENT PROTECTION</div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                装上电池时红灯会闪烁提示电压，闪烁次数为电压整数部分，<br />如3-4v之间闪3下，电压降到3V时红色指示灯常亮提示电压较低。<br />当电压降到2.8V时进入低电压保护程序，<br />红色指示灯快闪，主灯慢闪5次后熄灭。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e9;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">低电压智能保护</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LOW VOLTAGE INTELLIGENT PROTECTION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    装上电池时红灯会闪烁提示电压，闪烁次数为电压整数部分，<br />如3-4v之间闪3下，电压降到3V时红色指示灯常亮提示电压较低。<br />当电压降到2.8V时进入低电压保护程序，<br />红色指示灯快闪，主灯慢闪5次后熄灭。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e9;</span>
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
                    <div class="cpmd-title">T20CC 产品参数</div>
                    <div>首页/产品中心/T20CC/参数</div>
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
                    <img src="images/T20CC/T20CC-018.png" class="img-responsive" style="display:inline;">
                </div>
            </div>
            <div class="row proDetail">
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe634;</i>
                    <span>筒身长度 141 mm</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe636;</i>
                    <span>头部直径 34 mm</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe635;</i>
                    <span>尾部直径 25 mm</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe637;</i>
                    <span>Cree XM-L2 U3 LED</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe638;</i>
                    <span>最大输出 1000 流明</span>
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
                    <span>续航时间 40 流明（42个小时）</span>
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

    <div id="配件" class="cpmd">
        <div class="container">
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
            <div class="row">
                <div class="col-xs-9">
                    <div class="cpmd-title">T20CC 产品配件</div>
                    <div>首页/产品中心/T20CC/配件</div>
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
                        <img data-original="images/T20CC/T20CC-019.jpg" class="img-responsive hidden-xs">
                        <img data-original="images/T20CC/T20CC-019-s.jpg" class="img-responsive visible-xs-inline">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="position:relative">
                <div class="col-sm-6 navLimgPos" style="display:none" id="navLimgPos3">
                    <img src="images/T20CC/T20CC-020.png" class="img-responsive">
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
                    <img src="images/T20CC/T20CC-021.png" class="img-responsive">
                </div>
                <div class="col-sm-6 navFlexR">
                    <div class="leftNavFlex">
                        <div class="navWhatTextA">Why wait ? Order yours now .</div>
                        <div class="navNowBuyA">
                            <a href="http://item.jd.com/10987461323.html" target="view_window" onmouseenter='$("#navRimgPos3").fadeIn();' onmouseout='$("#navRimgPos3").fadeOut();'>立即购买</a>
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