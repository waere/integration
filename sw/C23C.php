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
    <title>SUNWAYMAN-炫卫者官网-C23C</title>
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
                <img src="images/C23C/C23C-001.jpg" class="img-responsive hidden-xs">
                <img src="images/C23C/C23C-001-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:20%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 30px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">C23C</div>
                <div class="wow bounceInRight" style="font-size: 36px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">充电轻触系列</div>
                <div class="wow bounceInRight" style="font-size: 20px;line-height: 50px;" data-wow-duration="1s" data-wow-delay="0.8s"></div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#">产品详情</a></div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:20%;text-align:center;position: absolute;color: #fff;">
                <div class="wow fadeInUp" style="color: #23b94e;font-size: 18px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0s">C23C</div>
                <div class="wow bounceInRight" style="font-size: 22px;line-height: 60px;font-weight:600;" data-wow-duration="1s" data-wow-delay="0.5s">充电轻触系列</div>
                <div class="wow bounceInRight" style="font-size: 16px;line-height: 50px;" data-wow-duration="1s" data-wow-delay="0.8s"></div>
                <div class="pt4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s"><a href="#">产品详情</a></div>
            </div>
        </div>
        <!--场景-->
        <div class="products-showBox" id="products-showBox" v-show="nv2Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/C23C/C23C-008.jpg" class="img-responsive hidden-xs">
                <img src="images/C23C/C23C-008-s.jpg" class="img-responsive visible-xs-inline">
            </div>
        </div>
        <!--参数-->
        <div class="products-showBox" id="products-showBox" v-show="nv3Status">
            <!--形象图-->
            <div class="pro-show-imgBox">
                <img src="images/C23C/C23C-012.jpg" class="img-responsive hidden-xs">
                <img src="images/C23C/C23C-012-s.jpg" class="img-responsive visible-xs-inline">
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
                    <div><a href="http://item.jd.com/10985104780.html" target="view_window"><span class="hidden-xs">SHOP </span>购买</a></div>
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
                <img data-original="images/C23C/C23C-002.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-002-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#000;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    供电系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/hei.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ELEGANT COPPER EDITION
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    使用体积适中的单节18650可充锂电池可直接充电<br/>
                    （或2*CR123A、2*RCR123不可直接充电）<br/>18650电池，普及型锂电池，广泛应用在电动车（例如:特斯拉）<br/>笔记本电脑等领域，体积小、重量轻、容量大、耐高低温
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe715; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe71a;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #000;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">供电系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/hei-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ELEGANT COPPER EDITION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    使用体积适中的单节18650可充锂电池可直接充电<br/>
                    （或2*CR123A、2*RCR123不可直接充电）<br/>18650电池，普及型锂电池，广泛应用在电动车（例如:特斯拉）<br/>笔记本电脑等领域，体积小、重量轻、容量大、耐高低温
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe715;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe71a;</span>
                </div>
            </div>      
        </div>

        <!--详情图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C23C/C23C-003.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-003-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全球通用Micro-USB充电接口
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ULTRA-COMPACT DESIGN, FITS EASILY INTO A POCKET
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    设计精美、精选高品质材料制作防护盖于筒体紧密贴合，全方位守护<br/>适应各类恶劣环境防沙、防尘、防水、防腐蚀
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6ff; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6fe;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:12%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全球通用Micro-USB充电接口</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">FITS EASILY INTO A POCKET</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    设计精美、精选高品质材料制作防护盖于筒体紧密贴合，全方位守护<br/>适应各类恶劣环境防沙、防尘、防水、防腐蚀
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ff;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6fe;</span>
                </div>
            </div>       
        </div>

        <!--详情图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C23C/C23C-004.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-004-s.jpg" class="img-responsive visible-xs-inline">
            </div> 
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:35%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全金属机身  手感舒适
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    INTELLIGENT CHIP & EXQUISITE
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                筒身紧凑，单手操作，隐秘性极强，可随身携带<br/>行业精品，工艺缔造品质。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f4; </span>
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6f5;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全金属机身  手感舒适</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">INTELLIGENT CHIP & EXQUISITE</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                筒身紧凑，单手操作，隐秘性极强，可随身携带<br/>行业精品，工艺缔造品质。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f4;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f5;</span>
                </div>
            </div>       
        </div>

        <!--详情图片4-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C23C/C23C-005.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-005-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:30%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    智能控制芯片
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    LIGHT EMITTER
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    恒速稳定充电,加载防过冲、过放程序，有效提升电池安全性50%
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e9;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">智能控制芯片</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LIGHT EMITTER</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    恒速稳定充电,加载防过冲、过放程序，有效提升电池安全性50%
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e9;</span>
                </div>
            </div>        
        </div>

        <!--详情图片5-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C23C/C23C-006.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-006-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:20%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="1s" data-wow-delay="0s">
                    智能USB充电系统
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                    ULTRA-COMPACT DESIGN
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 25px;margin-top:20px;" data-wow-duration="1s" data-wow-delay="0.8s">
                   点滴积累，长久动力<br/>智能控制芯片，恒速稳定充电，加载防过冲、过放程序，有效提升电池安全性50%。<br/>注：以上数据均为实验室测试值，实际使用可能会根据具体情况略有不同。
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s"> </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;" data-wow-duration="1s" data-wow-delay="0s">智能USB充电系统</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;line-height:40px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="1s" data-wow-delay="0.5s">ULTRA-COMPACT DESIGN</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                   点滴积累，长久动力<br/>智能控制芯片，恒速稳定充电，加载防过冲、过放程序，有效提升电池安全性50%。<br/>注：以上数据均为实验室测试值，实际使用可能会根据具体情况略有不同。
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>        
        </div>

        <!--详情图片6-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C23C/C23C-007.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-007-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aC hidden-xs" style="width:100%;overflow:hidden;top:20%;text-align:center;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    全球一流智能记忆芯片
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    ELEGANT COPPER EDITION
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    自动记忆上次关机时的亮度，贴心呵护，微电流待机<br/>待机电流不超过30uA，可使手电安全长期待机
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e6;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:35%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">全球一流智能记忆芯片</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">ELEGANT COPPER EDITION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    自动记忆上次关机时的亮度，贴心呵护，微电流待机<br/>待机电流不超过30uA，可使手电安全长期待机
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e6;</span>
                </div>
            </div>         
        </div>

        <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="background:url('images/C23C/C23C-020.png') no-repeat top center;background-size:cover;">
                <div class="col-sm-6 navFlexL">
                    <div class="leftNavFlex">
                        <div class="navWhatText">Why wait ? Order yours now .</div>
                        <div class="navNowBuy"><a href="http://sunwayman.jd.com" target="view_window">立即购买</a></div>
                    </div>
                </div>
                <div class="col-sm-6 navFlexR">
                    <div class="rightNavFlex">
                        <a href="javascript:advNavBar.changeTab(2);">
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
                <img data-original="images/C23C/C23C-009.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-009-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;bottom:10%;left:10%;text-align:left;position:absolute;color:#fff;">
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
                <img data-original="images/C23C/C23C-010.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-010-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:35%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    待机时间长
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    AS LOW AS 30ΜA STANDBY CURRENT
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    微电流待机，待机电流不超过30uA 可使手电安全长期待机
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e2;</span>
            </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">待机时间长</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">AS LOW AS 30ΜA STANDBY CURRENT</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    微电流待机，待机电流不超过30uA 可使手电安全长期待机
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e2;</span>
            </div>
            </div>       
        </div>
        <!--场景图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C23C/C23C-011.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-011-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:55%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    Micro-USB充电接口<br/>菱形防滑纹<br/>轻触多功能开关<br/>CREE XM-L2 U3 LED 优质金属反光杯<br/>体积：110.5mm (长) x32mm(头部直径)x27mm（尾部直径） 重量：88g（不含电池）
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;bottom:50%;text-align:center;position: absolute;color: #fff;">
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    Micro-USB充电接口<br/>菱形防滑纹<br/>轻触多功能开关<br/>CREE XM-L2 U3 LED 优质金属反光杯<br/>体积：110.5mm (长) x32mm(头部直径)x27mm（尾部直径） 重量：88g（不含电池）
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s"> </div>
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
                    <div class="cpmd-title">C23C 产品卖点</div>
                    <div>首页/产品中心/C23C/卖点</div>
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
                        采用一颗Cree XM-L2 U2 LED，寿命均长达50,000小时
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        All in one，侧按开关，五个挡位
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        具有USB充电接口，可使用电脑、充电宝或者供电电流直冲
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
                        主灯采用优质金属光面反光杯，兼顾聚光和泛光，光斑完美
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <span class="iconfont"></span>
                        重量：88g（不含电池）
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
                        体积：110mm (长) x30mm(头部直径)x25mm（尾部直径）
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
            <div class="row advBottomBg" style="background:url('images/C23C/C23C-020.png') no-repeat top center;background-size:cover;">
                <div class="col-sm-6 navFlexL">
                    <div class="rightNavFlexA">
                        <a href="javascript:advNavBar.changeTab(1);">
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
                <div class="col-sm-6 navFlexR">
                    <div class="rightNavFlex">
                        <a href="javascript:advNavBar.changeTab(3);">
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
                        <div class="cpmd-title">C23C 使用说明</div>
                        <div>首页/产品中心/C23C/使用</div>
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
                <img data-original="images/C23C/C23C-013.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-013-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
             
            <!--文字动画框手机-->
               
        </div>
        <!--使用说明图片2-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C23C/C23C-014.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-014-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aR hidden-xs" style="width:75%;overflow:hidden;top:20%;right:8%;text-align:right;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    自锁功能操作方法
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom: 10px;line-height: 60px; background:url(images/bai.png) no-repeat right bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LOCKING FUNCTION</div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                短按一次按键、再迅速长按（两秒以内）<br />LED闪烁一次，即可锁定按键，解锁亦然<br />自锁动能可以有效防止手电置于口袋、旅行袋、背包中<br />无意打开手电，造成不必要的照明浪费，损耗电池，耽误工作
                </div>
                <div class="hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:80px;color:#009a44;">&#xe6e3;</span>
                </div>
            </div>       
            <!--文字动画框手机-->
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:10%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">自锁功能操作方法</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">LOCKING FUNCTION</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height:2;">
                    短按一次按键、再迅速长按（两秒以内）<br />LED闪烁一次，即可锁定按键，解锁亦然<br />自锁动能可以有效防止手电置于口袋、旅行袋、背包中<br />无意打开手电，造成不必要的照明浪费，损耗电池，耽误工作
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6e3;</span>
                </div>
            </div>       
        </div>
        <!--使用说明图片3-->
        <div class="p-detailBox">
            <!--图片部分-->
            <div class="p-detailImgBox">
                <img data-original="images/C23C/C23C-015.jpg" class="img-responsive hidden-xs">
                <img data-original="images/C23C/C23C-015-s.jpg" class="img-responsive visible-xs-inline">
            </div>
            <!--文字动画框PC|直接style 到时此样式由后台程序输出控制，不固定样式-->
            <div class="aL hidden-xs" style="width:75%;overflow:hidden;top:25%;left:10%;text-align:left;position:absolute;color:#fff;">
                <div class="wow fadeInUp" style="font-size: 26px;" data-wow-duration="0.5s" data-wow-delay="0s">
                    五个挡位
                </div>
                <div class="wow fadeInUp" style="font-size: 20px;padding-bottom:10px;line-height: 60px; background:url(images/bai.png) no-repeat left bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    Five blocks
                </div>
                <div class="wow fadeInUp" style="font-size: 14px;line-height: 2;margin-top:20px;margin-bottom: 10px;" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    极亮档：380流明，持续点亮三分钟后，自动降为高亮档<br/>高亮档：180流明，续航2小时<br/>中亮档：50流明，续航10小时<br/>低亮档：10流明，续航60小时<br/>爆闪档
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
            <div class="visible-xs-inline" style="width:100%;overflow:hidden;top:8%;text-align:center;position: absolute;color: #fff;">
                <h3 class="wow fadeInUp" style="font-size: 18px;margin-top: 0;margin-bottom: 3px;" data-wow-duration="0.5s" data-wow-delay="0s">五个挡位</h3>
                <h2 class="wow fadeInUp" style="font-size: 10px;margin-top: 0;margin-bottom: 10px;line-height:34px;background:url(images/bai-s.png) no-repeat center bottom" data-wow-duration="0.5s" data-wow-delay="0.5s">Five blocks</h2>
                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.8s" style="padding-left:10px;padding-right:10px;font-size: 10px;line-height: 2;">
                    极亮档：380流明，持续点亮三分钟后，自动降为高亮档<br/>高亮档：180流明，续航2小时<br/>中亮档：50流明，续航10小时<br/>低亮档：10流明，续航60小时<br/>爆闪档
                </p>
                <div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.3s">
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ed;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ef;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6ee;</span>
                    <span class="iconfont" style="font-size:40px;color:#009a44;">&#xe6f1;</span>
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
                    <div class="cpmd-title">C23C 产品参数</div>
                    <div>首页/产品中心/C23C/参数</div>
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
                    <img src="images/C23C/C23C-016.png" class="img-responsive" style="display:inline;">
                </div>
            </div>
            <div class="row proDetail">
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe634;</i>
                    <span>筒身长度 110.5 mm</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe636;</i>
                    <span>头部直径 32 mm</span>
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
                    <span>最大输出 1000 流明</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 detailList">
                    <i class="iconfont">&#xe639;</i>
                    <span>最大射程 209 米</span>
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
                    <span>续航时间 35 流明（30个小时）</span>
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
                    <div class="cpmd-title">C23C 产品配件</div>
                    <div>首页/产品中心/C23C/配件</div>
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
                        <img data-original="images/C23C/C23C-017.jpg" class="img-responsive hidden-xs">
                        <img data-original="images/C23C/C23C-017-s.jpg" class="img-responsive visible-xs-inline">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--pc底部左右Tab切换 | 图片背景直接写到页面里，将来每个产品这张图不一样的-->
        <div class="container-fluid ctfloat hidden-xs nopd">
            <div class="row advBottomBg" style="background:url('images/C23C/C23C-020.png') no-repeat top center;background-size:cover;">
                <div class="col-sm-6 navFlexL">
                    <div class="rightNavFlexA">
                        <a href="javascript:advNavBar.changeTab(2);">
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
                <div class="col-sm-6 navFlexR">
                    <div class="leftNavFlex">
                        <div class="navWhatTextA">Why wait ? Order yours now .</div>
                        <div class="navNowBuyA"><a href="http://item.jd.com/10985104780.html" target="view_window">立即购买</a></div>
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