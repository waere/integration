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
                    <div class="cpmd-title">SUNWAYMAN 常见问题</div>
                    <div class="minsize">首页/ 教育 / 常见问题</div>
                </div>
                <div class="col-xs-3 cpmd-titleIco">
                    <span class="iconfont"></span>
                </div>
            </div>
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
        </div>
    </div>
    <div class="cpmd2" id="cjwt">
        <div class="container">
            <div class="row serverBzList">
                <div class="col-xs-12 BzBigTitle">一、请问使用过程中，需要注意哪些事项呢？</div>
                <!--数据绑定-->
                <div class="col-xs-12 BzList" v-for="item in wtList1">
                    <div class="BzSmTitle" :class="{BzItemActive:item.sw}" @click="item.sw = !item.sw;">{{item.wtT}}</div>
                    <transition
                        name="MC03-transition"
                        enter-active-class="animated fadeInUp"
                        leave-active-class="animated fadeOut"
                    >
                    <div class="BzContent" v-if="item.sw" v-html="item.wtC"></div>
                    </transition>
                </div>
            </div>
            <div class="row serverBzList" style="margin-top: 50px;">
                <div class="col-xs-12 BzBigTitle">二、手电不能正常点亮或者发生闪烁，如何处理？</div>
                <!--数据绑定-->
                <div class="col-xs-12 BzList" v-for="item in wtList2">
                    <div class="BzSmTitle" :class="{BzItemActive:item.sw}" @click="item.sw = !item.sw;">{{item.wtT}}</div>
                    <transition
                        name="MC03-transition"
                        enter-active-class="animated fadeInUp"
                        leave-active-class="animated fadeOut"
                    >
                    <div class="BzContent" v-if="item.sw" v-html="item.wtC"></div>
                    </transition>
                </div>
            </div>
            <div class="row serverBzList" style="margin-top: 50px;">
                <div class="col-xs-12 BzBigTitle">三、 如何成为SUNWAYMAN的经销商</div>
                <!--数据绑定-->
                <div class="col-xs-12 BzList" v-for="item in wtList3">
                    <div class="BzSmTitle" :class="{BzItemActive:item.sw}" @click="item.sw = !item.sw;">{{item.wtT}}</div>
                    <transition
                        name="MC03-transition"
                        enter-active-class="animated fadeInUp"
                        leave-active-class="animated fadeOut"
                    >
                    <div class="BzContent" v-if="item.sw" v-html="item.wtC"></div>
                    </transition>
                </div>
            </div>
            <div class="row serverBzList" style="margin-top: 50px;">
                <div class="col-xs-12 BzBigTitle">四、如何获得SUNWAYMAN的最新产品信息或者各类活动信息？</div>
                <!--数据绑定-->
                <div class="col-xs-12 BzList" v-for="item in wtList4">
                    <div class="BzSmTitle" :class="{BzItemActive:item.sw}" @click="item.sw = !item.sw;">{{item.wtT}}</div>
                    <transition
                        name="MC03-transition"
                        enter-active-class="animated fadeInUp"
                        leave-active-class="animated fadeOut"
                    >
                    <div class="BzContent" v-if="item.sw" v-html="item.wtC"></div>
                    </transition>
                </div>
            </div>
        </div>
    </div>

    <!-- 手电专业知识 -->
    <div class="cpmd">
        <div class="container">
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
            <div class="row">
                <div class="col-xs-9 nopd">
                    <div class="cpmd-title">SUNWAYMAN 手电专业知识</div>
                    <div class="minsize">首页/ 教育 / 手电专业知识</div>
                </div>
                <div class="col-xs-3 cpmd-titleIco">
                    <span class="iconfont"></span>
                </div>
            </div>
            <div class="row hidden-xs" style="height:50px;"></div>
            <div class="row visible-xs-block" style="height:20px;"></div>
        </div>
    </div>
    <div class="cpmd2" id="sdzyzs">
        <div class="container">
            <div class="row serverBzList">
                <div class="col-xs-12 BzBigTitle">SUNWAYMAN的电路</div>
                <!--数据绑定-->
                <div class="col-xs-12 BzList" v-for="item in zsList1">
                    <div class="BzSmTitle" :class="{BzItemActive:item.sw}" @click="item.sw = !item.sw;">{{item.zsT}}</div>
                    <transition
                        name="MC03-transition"
                        enter-active-class="animated fadeInUp"
                        leave-active-class="animated fadeOut"
                    >
                    <div class="BzContent" v-if="item.sw" v-html="item.zsC"></div>
                    </transition>
                </div>
            </div>
            <div class="row serverBzList" style="margin-top: 50px;">
                <div class="col-xs-12 BzBigTitle">SUNWAYMAN的LED技术</div>
                <!--数据绑定-->
                <div class="col-xs-12 BzList" v-for="item in zsList2">
                    <div class="BzSmTitle" :class="{BzItemActive:item.sw}" @click="item.sw = !item.sw;">{{item.zsT}}</div>
                    <transition
                        name="MC03-transition"
                        enter-active-class="animated fadeInUp"
                        leave-active-class="animated fadeOut"
                    >
                    <div class="BzContent" v-if="item.sw" v-html="item.zsC"></div>
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
        var WtData = {
            wtList1:[
                {
                    wtT:'电池使用',
                    sw:false,
                    wtC:'电池类型：请使用您的手电说明书指定的电池类型，使用充电电池时，请使用带保护电路的充电电池；<br/>电池更换：为了保证手电的使用性能和使用安全，更换电池时，请同时更换同品牌、同型号、同容量的电池，并对准正负极；手电长期不使用时，请将电池取出，以免发生电池漏液，损坏手电元器件。'
                },
                {
                    wtT:'防水圈及润滑油',
                    sw:false,
                    wtC:'手电出厂时防水圈会涂抹适量的润滑油，即可保证润滑延长防水圈的使用寿命，也更利于防水。当您发现您的手电防水圈处润滑油较少或已经没有，旋转螺纹时，有滞涩感，请及时在防水圈处涂抹适量润滑油；手电长期使用以后会发生防水圈磨损，请及时更换包装内附送的防水圈。 '
                },
                {
                   wtT:'最高亮档使用',
                    sw:false,
                    wtC:'您在使用最高亮档位时，电池放电、驱动电路、LED都会产生热量，手电头部会有较高的温度，请小心触摸；另外，使用最高亮档位时，建议一次持续点亮时间不超过十分钟，以保护电池、电路和LED，延长手电的使用寿命。'
                }
            ],
            wtList2:[
                {
                    wtT:'检查电池',
                    sw:false,
                    wtC:'如果手电不能正常点亮或者发生闪烁的状况，请检查是否电池电量耗尽，并更换新的电池；'
                },
                {
                    wtT:'清洗电路板触点和导电接触面',
                    sw:false,
                    wtC:'如果更换了新电池依然不能正常点亮，请检查手电的电路正负极触点、导电切面是否有污物，并用干净的清洁布清理； '
                },
                {
                   wtT:'请求维修',
                    sw:false,
                    wtC:'经过以上的处理之后，如果依然不能正常点亮，请联系您的手电销售商，按正常的保修流程进行保修；'
                }
            ],
            wtList3:[
                {
                    wtT:'申请成为经销商',
                    sw:false,
                    wtC:'如果您对经销SUNWAYMAN产品感兴趣，请将您的基本信息以邮件的形式发往邮箱：info@sunwayman.com，SUNWAYMAN公司将在第一时间与您取得联系，商讨后继事宜。另外您也可以推荐您认为有实力的本地经销商给SUNWAYMAN公司，如果您推荐的销售商最终与SUNWAYMAN公司达成合作，SUNWAYMAN公司将免费为您提供丰厚的礼品。<br/>电池更换：为了保证手电的使用性能和使用安全，更换电池时，请同时更换同品牌、同型号、同容量的电池，并对准正负极；手电长期不使用时，请将电池取出，以免发生电池漏液，损坏手电元器件。'
                }
            ],
            wtList4:[
                {
                    wtT:'获取最新产品信息',
                    sw:false,
                    wtC:'您可经常访问www.sunwayman.com网站的新品频道或者产品中心获取新品信息和各类活动信息；如果您愿意，您也可以用您的常用邮箱发邮件info@sunwayman.com进行相关查询。 也可以关注我们的微信公众号了解最新产品信息；微信公众号二维码在网址底部：社交“微信”图标。'
                }
            ]
        };
        var ZsData = {
            zsList1:[
                {
                    zsT:'',
                    sw:true,
                    zsC:'LED手电筒的电路系统是手电筒中最重要的部件之一，担负着驱动LED及实现调光操作的功能。SUNWAYMAN的电路，引入先进电源管理电路设计，可以输出稳定的驱动电流，使手电筒在整个工作过程中输出恒定并且不闪烁的光束。为了增加电路的效率和可靠性，我们不仅采取最优化的设计，选用最好的电子元件，甚至不惜工本在所有接触部件上进行了镀金或者镀银处理。<br/><br/>除此之外，我们还在电路系统中加入了微电脑处理器，让SUNWAYMAN的电路手电筒可以随意调节亮度，适应不同的使用环境。当使用同样电池时，LED的驱动电路对于所有LED手电提高电力转换效率和延长电池使用时间起着至关重要的作用。SUNWAYMAN电路的LED电路小巧且兼备高效性和可靠性，从而为SUNWAYMAN的电路手电提供了更长的使用时间，更高的流明输出和更好的兼容性。'
                },
                {
                    zsT:'LED',
                    sw:false,
                    zsC:'光二极管（英文：Light-Emitting Diode，简称LED）是一种半导体元件。初时多用作为指示灯、显示板等；随着白光发光二极管的出现，也被用作照明。LED被广泛运用于汽车工业上，航空行业，电脑电视显示屏，甚至用于家庭照明等领域。它是21世纪的新型光源，具有效率高、寿命长、不易破损等传统光源无法与之比较的优点。'
                },
                {
                    zsT:'节省能源',
                    sw:false,
                    zsC:'LED 能把百分之二十的输入功率转化为光能量，而传统的照明灯泡一般仅可以将百分之二的输入功率转化为光能量。因此，LED 技术超越了其他替代品，提供了良好的节约能源，使其成为一个具有成本效益和环保的现代发光设备。'
                },
                {
                    zsT:'使用寿命长',
                    sw:false,
                    zsC:'传统照明技术的原理是电流通过钨丝，从而使灯丝达到2500摄氏度，光能只是这一过程的副产品。由于固有的低效率设计，照明灯泡很快衰退且在流明达到1000时会烧坏。LED采用的是截然不同的原理，它为固体冷光源，环氧树脂封装，灯体内也没有松动的部分，不存在灯丝发光易烧、热沉积、光衰等缺点，在恰当的电流和电压下，使用寿命可达5万小时。'
                },
                {
                    zsT:'坚固耐用',
                    sw:false,
                    zsC:'LED被完全封装在环氧树脂里面，比灯泡和荧光灯管都坚固。灯体内也没有松动的部分，使得LED不易损坏。'
                },
                {
                    zsT:'快速照明',
                    sw:false,
                    zsC:'一个普通照明灯泡一般需要约100 到300 毫秒来启动照明，而LED 灯只需要几毫微秒，从而在要求高的应用方面具有显著优势。'
                }
            ],
            zsList2:[
                {
                    zsT:'',
                    sw:true,
                    zsC:'SUNWAYMAN高效率，超可靠的专利LED驱动电路在向LED高效转化电池电量方面起着重要作用。因此，所有SUNWAYMAN手电都有超高的输出量和超长的运行时间。当市面上大部分LED手电或个人照明产品都遭受输出电流持续下降的状况下，SUNWAYMAN的产品仍能保持不变的高输出，直到电池耗尽。'
                },
                {
                    zsT:'制作工艺',
                    sw:false,
                    zsC:'每一个SUNWAYMAN的手电，都由重量轻，硬度高的航太级铝合金制成。有别于大部分的厂商所使用的“管形”材料，SUNWAYMAN的手电筒外壳都是由一整块段的“铝棒”钻孔、切削而制成 。由于铝棒没有管形铝合金材料必然存在的细小裂缝，所以由“铝棒”加工而成的手电筒具有更高的机械强度，更能应对各种恶劣的使用环境（例如汽车碾压，高空摔落等）。 除了使用高强度的铝棒材料外，所有的SUNWAYMAN电筒都采用军规三级阳极氧化处理。军规三级氧化处理能在铝合金表面形成一层硬度仅次于钻石的高强度保护膜，能有效地防止手电筒受到刮伤，磨损或者腐蚀.'
                },
                {
                    zsT:'光学',
                    sw:false,
                    zsC:'我们的设计师在光学设计领域已经有多年的经验，我们为每一款SUNWAYMAN手电筒设计了专用的高效率金属反光杯，让手电筒输出柔和完美的光束，并且兼顾远射和近距离照明。同时，为了保护这个精密的光学部件，我们特意为每一只SUNWAYMAN手电装配了镀膜防刮钢化玻璃镜片。手电筒的反光杯.<br/><br/>LED手电筒光面反光杯突出特点之一远射，光面反光杯聚光效果好，可以让手电照得更远，但是光面光杯因为聚光效果好，会出现只有中间的光斑很亮，光斑周围比较暗的现象。<br/><br/>LED手电筒橘面光杯突出特点是均匀，橘面光杯正好相反，照射距离没有平面光杯那么远，但是因为它的高斯反射效果，光斑本身比平面光杯暗，光斑周围比平面光杯要亮。更适合于走夜路，不像平面光杯那样只有中间一个光点亮。'
                }
            ]
        };
        var educWtList = new Vue({
            el:"#cjwt",
            data:WtData,
            methods:{

            }
        });
        var educZsList = new Vue({
            el:"#sdzyzs",
            data:ZsData
        });
    </script>
</body>
</html>