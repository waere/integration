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
    <title>SUNWAYMAN-下载中心</title>
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
                    下载中心
                </div>
                <div class="col-md-6 proMenu">
                    <div><a href="#">产品手册</a></div>
                    <div><a href="#">产品说明书</a></div>
                    <div style="margin-right: 15px;"><a href="#">产品海报</a></div>
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


    <!--下载中心-->
    <div class="cpmd">
        <div class="container">
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
            <div class="row">
                <div class="col-xs-9 nopd">
                    <div class="cpmd-title">SUNWAYMAN 下载中心</div>
                    <div class="minsize">首页/ 下载中心</div>
                </div>
                <div class="col-xs-3 cpmd-titleIco">
                    <span class="iconfont"></span>
                </div>
            </div>
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
        </div>
    </div>
    <div class="cpmd2" id="xzzx">
        <div class="container">
            <div class="downbox">
                <div class="col-xs-12 dwtit">产品手册</div>
                <p class="col-xs-12 dwscs">欢迎下载SUNWAYMAN产品手册！手册中的产品内容仅供参考，最终解释权归SUNWAYMAN公司所有。</p>
                <!--数据绑定-->
                <div class="col-xs-12 dwxzbox">
                    <div class="col-md-3 col-xs-12" v-for="sc in xzList1">
                        <div class="col-md-8 col-xs-8 dwxzL">
                            <h3>{{sc.scT}}</h3>
                            <h4>{{sc.scN}}</h4>
                            <span>{{sc.scM}}</span>
                        </div>
                        <div class="iconfont col-md-4 col-xs-4 nopd dwxzR">
                            <a href="javascript:void(0);" class="iconfont" @click="download(sc.scUrl,sc.fileName);">&#xe659;</a>
                        </div>                       
                    </div>
                </div>
            </div>
            <hr/>
            <div class="downbox" id="cpsms">
                <div class="col-xs-12 dwtit">产品说明书</div>
                <!--数据绑定-->
                <div class="col-xs-12 dwsmbox">
                    <div class="row col-md-4 col-xs-12 nopd" v-for="sms in xzList2">
                        <div class="dwsmslist col-xs-6" v-for="sm in sms.sms">
                            <h3>{{sm.smsT}}</h3>
                            <div class="smsxz col-xs-12" v-for="s in sm.xlLis">
                                <div class="col-xs-8 smsxzL">{{s.cpName}}</div>
                                <div class="col-xs-4 smsxzR"><a href="javascript:void(0);" class="iconfont" @click="download(s.cpUrl,s.fileName);">&#xe659;</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="downbox" id="cphaibao">
                <div class="col-xs-12 dwtit">产品海报</div>
                <!--数据绑定-->
                <div class="col-xs-12 dwhbbox">
                    <div class="col-md-2 col-xs-6" v-for="hb in xzList3">
                        <div class="hbxz col-xs-12">
                            <div class="col-xs-8 hbxzL">{{hb.hbName}}</div>
                            <div class="col-xs-4 hbxzR"><a href="javascript:void(0);" class="iconfont" @click="download(hb.hbUrl,hb.fileName);">&#xe659;</a></div>
                            <div class="col-xs-12 hbimg">
                                <img :src=hb.hbImg alt="">
                            </div>
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
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
                increaseArea: '-10' // optional
            });
        });
        // 返回页面顶部
        function pageScroll() { 
            $('body').animate({scrollTop: 0}, 500); 
        };
        // 下载中心
        var XzData = {
           xzList1:[
                {
                    scT:'2017',
                    sw:false,
                    scN:'SUNWAYMAN',
                    scM:'产品手册',
                    scUrl:'#',
                    fileName:''
                }
            ],
            xzList2:[
                {
                    sms:[
                        {
                            smsT:'EDC探秘系列',
                            xlLis:[
                                {
                                    cpName:'C12CC',
                                    cpUrl:'#',
                                    fileName:''
                                },
                                {
                                    cpName:'T16R',
                                    cpUrl:'file/T16R-Instructions.doc',
                                    fileName:'T16R-Instructions.doc'
                                },
                                {
                                    cpName:'V11R',
                                    cpUrl:'file/V11R-Instructions.doc',
                                    fileName:'V11R-Instructions.doc'
                                },
                                {
                                    cpName:'C13R',
                                    cpUrl:'file/C13R-Instructions.doc',
                                    fileName:'C13R-Instructions.doc'
                                }
                            ]
                        },
                        {
                            smsT:'便携户外系列',
                            xlLis:[
                                {
                                    cpName:'C22CC',
                                    cpUrl:'#',
                                    fileName:''
                                },
                                {
                                    cpName:'C22C',
                                    cpUrl:'file/C22C-Instructions.doc',
                                    fileName:'C22C-Instructions.doc'
                                },
                                {
                                    cpName:'T26C',
                                    cpUrl:'file/T26C-Instructions.doc',
                                    fileName:'T26C-Instructions.doc'
                                },
                                {
                                    cpName:'C23C',
                                    cpUrl:'file/C23C-Instructions.doc',
                                    fileName:'C23C-Instructions.doc'
                                }
                            ]
                        }
                    ]
                },
                {
                    sms:[
                        {
                            smsT:'纵度搜索系列',
                            xlLis:[
                                {
                                    cpName:'G20C',
                                    cpUrl:'file/G20C-Instructions.doc',
                                    fileName:'G20C-Instructions.doc'
                                },
                                {
                                    cpName:'G25C',
                                    cpUrl:'file/G25C-Instructions.doc',
                                    fileName:'G25C-Instructions.doc'
                                },
                                {
                                    cpName:'T20CC',
                                    cpUrl:'file/T20CC-Instructions.doc',
                                    fileName:'T20CC-Instructions.doc'
                                },
                                {
                                    cpName:'T25C',
                                    cpUrl:'file/T25C-Instructions.doc',
                                    fileName:'T25C-Instructions.doc'
                                },
                                {
                                    cpName:'P25C',
                                    cpUrl:'file/P25C-Instructions.doc',
                                    fileName:'P25C-Instructions.doc'
                                }
                            ]
                        },
                        {
                            smsT:'野外战术系列',
                            xlLis:[
                                {
                                    cpName:'D40A',
                                    cpUrl:'file/D40A-Instructions.doc',
                                    fileName:'D40A-Instructions.doc'
                                },
                                {
                                    cpName:'T40CS',
                                    cpUrl:'file/T40CS-PLUS-Instructions.doc',
                                    fileName:'T40CS-PLUS-Instructions.doc'
                                },
                                {
                                    cpName:'T60CS',
                                    cpUrl:'file/T60CS-Instructions.doc',
                                    fileName:'T60CS-Instructions.doc'
                                }
                            ]
                        }
                    ]
                },
                {
                    sms:[
                        {
                            smsT:'限量收藏系列',
                            xlLis:[
                                {
                                    cpName:'T16R CU',
                                    cpUrl:'file/T16R-CU-Instructions.doc',
                                    fileName:'T16R-CU-Instructions.doc'
                                },
                                {
                                    cpName:'C25C Ti',
                                    cpUrl:'file/C25C-TI-Instructions.doc',
                                    fileName:'C25C-TI-Instructions.doc'
                                },
                                {
                                    cpName:'M25C Ti',
                                    cpUrl:'file/M25CTI-Instructions.doc',
                                    fileName:'M25CTI-Instructions.doc'
                                }
                            ]
                        },
                        {
                            smsT:'迷你精灵系列',
                            xlLis:[
                                {
                                    cpName:'Ti comet',
                                    cpUrl:'#',
                                    fileName:''
                                }
                            ]
                        }
                    ]
                },
            ],
            xzList3:[
                {
                    hbName:'C12CC',
                    hbUrl:'#',
                    fileName:'',
                    hbImg:'images/download/dw.jpg'
                },
                {
                    hbName:'T16R',
                    hbUrl:'#',
                    fileName:'',
                    hbImg:'images/download/dw.jpg'
                },
                {
                    hbName:'V11R',
                    hbUrl:'#',
                    fileName:'',
                    hbImg:'images/download/dw.jpg'
                },
                {
                    hbName:'C13R',
                    hbUrl:'#',
                    fileName:'',
                    hbImg:'images/download/dw.jpg'
                },
                {
                    hbName:'C22CC',
                    hbUrl:'#',
                    fileName:'',
                    hbImg:'images/download/dw.jpg'
                }
            ]
        };
        var educXzList = new Vue({
            el:"#xzzx",
            data:XzData,
            methods:{
                download:function (href, title) {
                    if(href == '' || title == ''){
                        return false;
                    }else{
                       const a = document.createElement('a');
                        a.setAttribute('href', href);
                        a.setAttribute('download', title);
                        a.click(); 
                    }                    
                }
            }
        });
    </script>
</body>
</html>