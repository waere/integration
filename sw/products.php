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
    <title>SUNWAYMAN-产品中心</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/swiper-3.4.2.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/skins/square/green.css">
    <link rel="stylesheet" href="css/sunwayman.css">
    <style>
        body{
            background-color: #000;
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
    
    <!--视频播放-->
    <div class="index-video-boxB">
        <!--视频标签-->
        <video id="background_video" class="hidden-xs" loop muted></video>
        <!--视频封面-->
        <div id="video_cover"></div>
        <!--视频文字层-->
        <div class="videoTextBox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 videoTextTips">
                        <img src="images/1_kv_4_1.png" style="max-width:90%;">
                    </div>
                    <div class="col-xs-12 videoDetailBtn">
                        <a href="javascript:void(0);">产品视频 <i class="iconfont">&#xe60f;</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--产品筛选部分数据绑定-->
    <div class="screening" id="screening">
        <div class="container">
            <div class="row" style="padding-top:10px;">

                <div class="col-xs-12 col-sm-4 col-sm-offset-4" id="sxSearchBox" v-show="!searchL">
                    <div class="col-xs-9 col-sm-12">
                        <!-- <div class="sisearchItem">
                            <span>产品筛选</span>
                            <span>Product screening</span>
                            <i class="iconfont">&#xe616;</i>
                        </div> -->
                        <div class="sisearchItem2">
                            <span>产品搜索</span>
                            <span>Product search</span>
                        </div>
                        <div class="sisearchItem3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入关键词或产品名称">
                                <span class="input-group-btn">
                                    <button class="btn btn-default iconfont siSearchBtn" type="button">&#xe612;</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3 visible-xs-inline" style="padding-top:20px;">
                        <a href="javascript:showSXList();"><img src="images/ssRight.png" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-xs-12 closeSxBox hidden-sm hidden-md hidden-lg" v-show="!searchR">
                    <div><a href="javascript:alert('请自行左右拖动！');"><img src="images/sxleft.png" alt=""></a></div>
                    <div style="text-align: center;line-height: 40px;"><a href="javascript:closeSxList();"><img style="width: 70%;" src="images/closeSx.jpg" alt=""></a></div>
                    <div><a href="javascript:alert('请自行左右拖动！');"><img src="images/sxright.png" alt=""></a></div>
                </div>
                <div id="selBlock" v-show="!searchR" :class="{scChangeSW:!closeScroll}">
                    <div class="col-xs-12 col-sm-8 siList" :class="{scChangeSW2:!closeScroll}">
                        <dl v-for="(item,k) in scList">
                            <dt>{{item.dt}}</dt>
                            <dd v-for="sub in item.scSubList">
                                <input type="checkbox" :name="'searchGroup'+k" :id="'sx-'+sub.skey">
                                <label :for="'sx-'+sub.skey">{{sub.sval}}</label>
                            </dd>
                        </dl>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!--产品列表-->
    <div class="allproducts" id="allproducts">
        <div class="productsBox" v-for="pitem in cplist">
            <!--列表头部-->
            <div class="proBox">
                <div class="flipe-pro">
                    <div class="flipper">
                        <div class="front"><img :src="pitem.fimg" :alt="pitem.cpdes"></div>
                        <div class="back"><img :src="pitem.bimg" :alt="pitem.cpdes"></div>
                    </div>
                </div>
            </div>
            <!--分类产品列表-->
            <div class="proBox" v-for="p in pitem.plist">
                <div class="lipl_conbox" :class="{mtop:p.icheck}">
                    <div class="lipl_top">							
                        <div class="conbox_brief">
                            <h5>{{p.ptitle}}</h5>
                            <b class="hidden-xs"></b>
                            <div class="hidden-xs" v-html="p.pdec"></div>
                        </div>
                        <div class="conbox_img"><img :src="p.pimg" :alt="p.ptitle"></div>
                        <div class="conbox_cuebox">
                            <b v-if="p.pnew">NEW</b>
                            <b v-if="p.phot">HOT</b> 
                        </div>
                    </div>
                    <div class="lipl_bottom">
                        <div class="lipl_para">
                            <h3>{{p.ptitle}}</h3>
                            <b></b>
                            <p v-html="p.pbright"></p>
                            <p v-html="p.prange"></p>
                            <p v-html="p.pusetime"></p>
                            <p class="hidden-xs" v-html="p.pweight"></p>
                            <p class="hidden-xs" v-html="p.pled"></p>
                            <p class="hidden-xs" v-html="p.pbretty"></p>
                        </div>
                        <div class="lipl_shopbox">
                            <ul class="row">
                                <li class="col-md-4 col-xs-6"><a :href="p.pmoreurl" target="view_window">了解更多</a></li>
                                <li class="col-md-4 col-xs-6"><a :href="p.pbuyurl" target="view_window">立即购买</a></li>
                                <li class="contrast_btn col-md-4 hidden-xs"><a href="javascript:void(0);" @click="p.icheck=!p.icheck" ><i :class="{icheck:p.icheck}"></i>加入对比</a></li>
                            </ul>
                        </div>
                    </div>
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
    <script type="text/javascript" src="js/bideo.js"></script>
    <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="js/icheck.min.js"></script>
    <script type="text/javascript" src="js/vue.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/mc.public.js"></script>
    <script type="text/javascript" src="js/mc.products.js"></script>
</body>
</html>