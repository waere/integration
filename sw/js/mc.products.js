$(function(){
    var bv = new Bideo();
    bv.init({
        // Video element
        videoEl: document.querySelector('#background_video'),
        // Container element
        container: document.querySelector('body'),
        // Resize
        resize: true,
        // autoplay: false,
        isMobile: window.matchMedia('(max-width: 768px)').matches,
        playButton: document.querySelector('#play'),
        pauseButton: document.querySelector('#pause'),
        // Array of objects containing the src and type
        // of different video formats to add
        src: [
        {
            src: 'video/video2.mp4',
            type: 'video/mp4'
        },
        {
            src: 'video/video2.webm',
            type: 'video/webm;codecs="vp8, vorbis"'
        }
        ],
        // What to do once video loads (initial frame)
        onLoad: function () {
        document.querySelector('#video_cover').style.display = 'none';
        }
    });

    $('input').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'icheckbox_square-green',
        increaseArea: '-10'
    });

    changeSList();
});
// 显示筛选
function showSXList() {
    changeSList();
    screeningList.$data.searchL = true;
    screeningList.$data.searchR = false;
}
function closeSxList() {
    changeSList();
    screeningList.$data.searchL = false;
    screeningList.$data.searchR = true;
}
// 小屏窗口
function changeSList() {
    if($(document).width() <= 992)
    {
        screeningList.$data.searchR = true;
        $(".productsBox").each(function(){
            $(this).css({"flex-wrap":"nowrap","overflow-x":"scroll"});
        });
        $(".proBox").each(function(){
            $(this).css({"min-width":"48%"});
            $(".flipper").css({"height":$(this).width()+"px"});
            $(".proBox .flipper .front img").css({"width":"80%"});
        });
        $(".scChangeSW2").css({
            "width":"1000px",
            "justify-content":"space-around"
        });
    }
    else
    {
        screeningList.$data.searchL = false;
        screeningList.$data.searchR = false;
        screeningList.$data.closeScroll = true;
        $(".productsBox").each(function(){
            $(this).css({"flex-wrap":"wrap","overflow-x":"hidden"});
        });
        $(".proBox").each(function(){
            $(this).css({"min-width":"305px"});
            $(".flipper").css({"min-height":"305px"});
        });
        $(".scChangeSW2").css({
            "width":"100%",
            "justify-content":"space-between"
        });
    }    
}
window.onresize = function(){
    changeSList();
};
var screeningData = {
    isMobile:false,
    searchL:false,
    searchR:false,
    closeScroll:false,
    scList:[
        {
            dt:'产品材质',
            scSubList:[
                {
                    skey:'1001',
                    sval:'钛合'
                },
                {
                    skey:'1002',
                    sval:'铝合金'
                },
                {
                    skey:'1003',
                    sval:'紫铜'
                }
            ]
        },
        {
            dt:'产品功能',
            scSubList:[
                {
                    skey:'2001',
                    sval:'战警'
                },
                {
                    skey:'2002',
                    sval:'巡逻'
                },
                {
                    skey:'2003',
                    sval:'搜寻'
                },
                {
                    skey:'2004',
                    sval:'渔猎'
                },
                {
                    skey:'2005',
                    sval:'露营'
                },
                {
                    skey:'2006',
                    sval:'医疗'
                }
            ]
        },
        {
            dt:'充电方式',
            scSubList:[
                {
                    skey:'3001',
                    sval:'直充型'
                },
                {
                    skey:'3002',
                    sval:'座充型'
                },
                {
                    skey:'3003',
                    sval:'拆电型'
                }
            ]
        },
        {
            dt:'流明值',
            scSubList:[
                {
                    skey:'4001',
                    sval:'0-100'
                },
                {
                    skey:'4002',
                    sval:'100-500'
                },
                {
                    skey:'4003',
                    sval:'500-1000'
                }
            ]
        },
        {
            dt:'射程(m)',
            scSubList:[
                {
                    skey:'5001',
                    sval:'0-100'
                },
                {
                    skey:'5002',
                    sval:'101-200'
                },
                {
                    skey:'5003',
                    sval:'201-500'
                },
                {
                    skey:'5004',
                    sval:'>500'
                }
            ]
        },
        {
            dt:'色温类型',
            scSubList:[
                {
                    skey:'6001',
                    sval:'中白光'
                },
                {
                    skey:'6002',
                    sval:'白光'
                },
                {
                    skey:'6003',
                    sval:'告白光'
                }
            ]
        },
        {
            dt:'重量(g)',
            scSubList:[
                {
                    skey:'7001',
                    sval:'1-80'
                },
                {
                    skey:'7002',
                    sval:'80-200'
                },
                {
                    skey:'7003',
                    sval:'200-500'
                },
                {
                    skey:'7004',
                    sval:'>500'
                }
            ]
        },
        {
            dt:'电池类型',
            scSubList:[
                {
                    skey:'8001',
                    sval:'18650'
                },
                {
                    skey:'8002',
                    sval:'CR123'
                },
                {
                    skey:'8003',
                    sval:'16340'
                },
                {
                    skey:'8004',
                    sval:'>500'
                }
            ]
        },
        {
            dt:'LED类型',
            scSubList:[
                {
                    skey:'9001',
                    sval:'CREE XQ-E R2'
                },
                {
                    skey:'9002',
                    sval:'Cree XM-L2 U3'
                },
                {
                    skey:'9003',
                    sval:'Cree XM-L2'
                },
                {
                    skey:'9004',
                    sval:'Cree Xlamp mt-G2'
                },
                {
                    skey:'9005',
                    sval:'Cree XM-L2 U2'
                }
            ]
        }
    ]
};
var screeningList = new Vue({
    el:'#screening',
    data:screeningData
});

var proListObj = {
    cplist:[
        {
          fimg:'images/2-product-4-1.png',
          bimg:'images/2-product-4.png', 
          cpdes:'EDC探密',
          plist:[
            {
                  ptitle:'C12CC',
                  pdec:'<p>迷你双灯820流明手电筒</p><p>采用航天级铝合金制造</p><p>军规三级硬质氧化</p>',
                  pimg:'images/p-C12CC.png',
                  pnew:true,
                  phot:true,
                  pbright:'最高亮度：<span>820 流明</span>',
                  prange:'最大射程：<span>210 米</span>',
                  pweight:'手电重量：<span>124g</span>',
                  pusetime:'续航时间：<span>35流明，续航10小时</span>',
                  pled:'LED：<span>Cree XM-L2 U2 LED，CREE XP-G2 R5 LED</span>',
                  pbretty:'使用电池：<span>2xCR123A/18650</span>',
                  pmoreurl:'C12CC.php',
                  pbuyurl:'http://sunwayman.jd.com',
                  pdburl:''
              },
              {
                  ptitle:'T16R',
                  pdec:'<p>明镜 · 智芯 · 致精巧</p><p>钥匙扣级手电</p><p>高品质航空T6级铝材</p>',
                  pimg:'images/p-T16R.png',
                  pnew:true,
                  phot:true,
                  pbright:'最高亮度：<span>380 流明</span>',
                  prange:'最大射程：<span>150 米</span>',
                  pweight:'手电重量：<span>37.1g</span>',
                  pusetime:'续航时间：<span>10流明，60小时</span>',
                  pled:'LED：<span>Cree XM-L2 U3 LED</span>',
                  pbretty:'使用电池：<span>1xCR123</span>',
                  pmoreurl:'T16R.php',
                  pbuyurl:'http://item.jd.com/10987484638.html',
                  pdburl:''
              },
              {
                  ptitle:'V11R',
                  pdec:'<p>无级磁控战术手电</p><p>设计精良·调光新颖</p><p>可拓展EDC手电</p>',
                  pimg:'images/p-V11R.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>570 流明</span>',
                  prange:'最大射程：<span>139 米</span>',
                  pweight:'手电重量：<span>49g</span>',
                  pusetime:'续航时间：<span>1流明 (35小时)</span>',
                  pled:'LED：<span>Cree XM-L2 LED</span>',
                  pbretty:'使用电池：<span>1xCR123A/RCR123A/16340</span>',
                  pmoreurl:'V11R.php',
                  pbuyurl:'http://sunwayman.jd.com',
                  pdburl:''
              },
              {
                  ptitle:'C13R',
                  pdec:'<p>多功能一键开关</p><p>USB智能充电系统手电</p><p>Mini体积，一手掌握</p>',
                  pimg:'images/p-C13R.png',
                  pnew:false,
                  phot:true,
                  pbright:'最高亮度：<span>380 流明</span>',
                  prange:'最大射程：<span>200 米</span>',
                  pweight:'手电重量：<span>72.8g</span>',
                  pusetime:'续航时间：<span>低亮档（10流明，续航60小时 ）</span>',
                  pled:'LED：<span>Cree XM-L2 U3 LED</span>',
                  pbretty:'使用电池：<span>1xCR123A/RCR123A/16340</span>',
                  pmoreurl:'C13R.php',
                  pbuyurl:'http://item.jd.com/11005837641.html',
                  pdburl:''
              }
          ]
        },
        {
          fimg:'images/2-product-2-1.png',
          bimg:'images/2-product-2.png', 
          cpdes:'便携户外',
          plist:[
            {
                  ptitle:'C22CC',
                  pdec:'<p>迷你双灯手电筒820流明</p><p>采用航天级铝合金制造</p><p>军规三级硬质氧化</p>',
                  pimg:'images/p-C22CC.png',
                  pnew:true,
                  phot:true,
                  pbright:'最高亮度：<span>820 流明</span>',
                  prange:'最大射程：<span>310 米</span>',
                  pweight:'手电重量：<span>48.8g</span>',
                  pusetime:'续航时间：<span>35流明，续航42小时</span>',
                  pled:'LED：<span>Cree XM-L2 U2 LED，CREE XP-G2 R5 LED</span>',
                  pbretty:'使用电池：<span>2xCR123A/18650</span>',
                  pmoreurl:'C22CC.php',
                  pbuyurl:'http://sunwayman.jd.com',
                  pdburl:''
              },
              {
                  ptitle:'C22C',
                  pdec:'<p>业界领先，手电、L型灯和谐统一</p><p>380流明 双灯同亮“夜行者</p><p>梯形螺纹，顺滑可靠</p>',
                  pimg:'images/p-C22C.png',
                  pnew:true,
                  phot:true,
                  pbright:'最高亮度：<span>1000 流明</span>',
                  prange:'最大射程：<span>208 米</span>',
                  pweight:'手电重量：<span>88.3g</span>',
                  pusetime:'续航时间：<span>35流明，续航30小时</span>',
                  pled:'LED：<span>Cree XM-L2 U2 LED，CREE XP-G2 R5 LED</span>',
                  pbretty:'使用电池：<span>1x18650/2xCR123A</span>',
                  pmoreurl:'C22C.php',
                  pbuyurl:'http://item.jd.com/10983744069.html',
                  pdburl:''
              },
              {
                  ptitle:'T26C',
                  pdec:'<p>袖珍级18650手电</p><p>明镜·智芯·致精巧</p><p>光学凸透镜系统</p>',
                  pimg:'images/p-T26C.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>800 流明</span>',
                  prange:'最大射程：<span>150 米</span>',
                  pweight:'手电重量：<span>48.8g</span>',
                  pusetime:'续航时间：<span>35流明，续航30小时</span>',
                  pled:'LED：<span>Cree XM-L2 U3 LED</span>',
                  pbretty:'使用电池：<span>2xCR123A/18650</span>',
                  pmoreurl:'T26C.php',
                  pbuyurl:'http://item.jd.com/11005727904.html',
                  pdburl:''
              },
              {
                  ptitle:'C23C',
                  pdec:'<p>充电轻触系列</p><p>智能USB充电系统</p><p>经典黑银两色</p>',
                  pimg:'images/p-C23C.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>1000 流明</span>',
                  prange:'最大射程：<span>209 米</span>',
                  pweight:'手电重量：<span>88.3g</span>',
                  pusetime:'续航时间：<span>35流明，续航30小时</span>',
                  pled:'LED：<span>Cree XM-L2 U3 LED</span>',
                  pbretty:'使用电池：<span>1x18650/2XCR123A</span>',
                  pmoreurl:'C23C.php',
                  pbuyurl:'http://item.jd.com/10985104780.html',
                  pdburl:''
              }
          ]
        },
        {
          fimg:'images/2-product-3-1.png',
          bimg:'images/2-product-3.png', 
          cpdes:'纵度搜索',
          plist:[
              {
                  ptitle:'G20C',
                  pdec:'<p>势在·型在·智能</p><p>1000流明军警级手电</p><p>军工级硬质氧化膜</p>',
                  pimg:'images/p-G20C.png',
                  pnew:true,
                  phot:true,
                  pbright:'最高亮度：<span>1000 流明</span>',
                  prange:'最大射程：<span>208 米</span>',
                  pweight:'手电重量：<span>117g</span>',
                  pusetime:'续航时间：<span>16流明，80小时</span>',
                  pled:'LED：<span>Cree XM-L2 U2 LED</span>',
                  pbretty:'使用电池：<span>1x18650/2xCR123A</span>',
                  pmoreurl:'G20C.php',
                  pbuyurl:'http://sunwayman.jd.com',
                  pdburl:''
              },
              {
                  ptitle:'G25C',
                  pdec:'<p>1000流明</p><p>双尾按“双子座”手电</p><p>轻触式主按钮开关</p>',
                  pimg:'images/p-G25C.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>800 流明</span>',
                  prange:'最大射程：<span>208 米</span>',
                  pweight:'手电重量：<span>93.4g</span>',
                  pusetime:'续航时间：<span>16流明，80小时</span>',
                  pled:'LED：<span>Cree XM-L2 U2 LED</span>',
                  pbretty:'使用电池：<span>2xCR123A/18650</span>',
                  pmoreurl:'G25C.php',
                  pbuyurl:'http://item.jd.com/11005812999.html',
                  pdburl:''
              },
              {
                  ptitle:'T20CC',
                  pdec:'<p>暴力唯美BOSS级手电</p><p>智能USB充电系统</p><p>航空T6级铝材</p>',
                  pimg:'images/p-T20CC.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>880 流明</span>',
                  prange:'最大射程：<span>300 米</span>',
                  pweight:'手电重量：<span>176g</span>',
                  pusetime:'续航时间：<span>17流明，续航60小时</span>',
                  pled:'LED：<span>Cree XM-L2 U3 LED</span>',
                  pbretty:'使用电池：<span>1x18650/2XCR123A</span>',
                  pmoreurl:'T20CC.php',
                  pbuyurl:'http://item.jd.com/10987461323.html',
                  pdburl:''
              },
              {
                  ptitle:'T25C',
                  pdec:'<p>凸透镜的光明之旅</p><p>光学凸透镜系统</p><p>浪漫酒吧射灯</p>',
                  pimg:'images/p-T25C.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>1000 流明</span>',
                  prange:'最大射程：<span>300 米</span>',
                  pweight:'手电重量：<span>116.6g</span>',
                  pusetime:'续航时间：<span>16流明，80小时</span>',
                  pled:'LED：<span>Cree XM-L2 U3 LED</span>',
                  pbretty:'使用电池：<span>2xCR123A/18650</span>',
                  pmoreurl:'T25C.php',
                  pbuyurl:'http://item.jd.com/11563745630.html',
                  pdburl:''
              },
              {
                  ptitle:'P25C',
                  pdec:'<p>1000流明侧按随身“闪电小子”</p><p>尾部双键式明星级设计</p><p>高档头灯带</p>',
                  pimg:'images/p-P25C.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>1488 流明</span>',
                  prange:'最大射程：<span>500 米</span>',
                  pweight:'手电重量：<span>165.4g</span>',
                  pusetime:'续航时间：<span>30流明 (31 小时)</span>',
                  pled:'LED：<span>Cree XM-L2 U2 LED</span>',
                  pbretty:'使用电池：<span>1x18650/2xCR123A</span>',
                  pmoreurl:'P25C.php',
                  pbuyurl:'http://item.jd.com/11544285954.html',
                  pdburl:''
              }
          ]
        },
        {
          fimg:'images/2-product-1-1.png',
          bimg:'images/2-product-1.png', 
          cpdes:'野外战术',
          plist:[
              {
                  ptitle:'D40A',
                  pdec:'<p>小霸王980流明掌中宝</p><p>双键触摸侧按开</p><p>不锈钢头部压环</p>',
                  pimg:'images/p-D40A.png',
                  pnew:true,
                  phot:true,
                  pbright:'最高亮度：<span>980 流明</span>',
                  prange:'最大射程：<span>315 米</span>',
                  pweight:'手电重量：<span>165.4g</span>',
                  pusetime:'续航时间：<span>30流明 (31 小时)</span>',
                  pled:'LED：<span>CREE XM-L2 LED</span>',
                  pbretty:'使用电池：<span>4节AA电池</span>',
                  pmoreurl:'D40A.php',
                  pbuyurl:'http://item.jd.com/11043997899.html',
                  pdburl:''
              },
              {
                  ptitle:'T40CS',
                  pdec:'<p>中白光远射型侧按战术手电</p><p>航天级铝合金制造</p><p>有效射程达500米</p>',
                  pimg:'images/p-T40CS.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>980 流明</span>',
                  prange:'最大射程：<span>315 米</span>',
                  pweight:'手电重量：<span>165.4g</span>',
                  pusetime:'续航时间：<span>30流明 (31 小时)</span>',
                  pled:'LED：<span>CREE XM-L2 LED</span>',
                  pbretty:'使用电池：<span>4节AA电池</span>',
                  pmoreurl:'#',
                  pbuyurl:'http://item.jd.com/11646351145.htm',
                  pdburl:''
              },
              {
                  ptitle:'T60CS',
                  pdec:'<p>可充电三头侧按手电</p><p>三孔优质金属光面反光杯</p><p>增韧超清晰钢化玻璃镜片</p>',
                  pimg:'images/p-T60CS.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>980 流明</span>',
                  prange:'最大射程：<span>315 米</span>',
                  pweight:'手电重量：<span>165.4g</span>',
                  pusetime:'续航时间：<span>30流明 (31 小时)</span>',
                  pled:'LED：<span>CREE XM-L2 LED</span>',
                  pbretty:'使用电池：<span>4节AA电池</span>',
                  pmoreurl:'#',
                  pbuyurl:'http://item.jd.com/12067853458.html',
                  pdburl:''
              }
          ]
        },
        {
          fimg:'images/2-product-5-1.png',
          bimg:'images/2-product-5.png', 
          cpdes:'限量收藏',
          plist:[
              {
                  ptitle:'T16R.CU',
                  pdec:'<p>小霸王980流明掌中宝</p><p>双键触摸侧按开</p><p>不锈钢头部压环</p>',
                  pimg:'images/p-T16R.CU.png',
                  pnew:true,
                  phot:true,
                  pbright:'最高亮度：<span>380 流明</span>',
                  prange:'最大射程：<span>150 米</span>',
                  pweight:'手电重量：<span>30.8g</span>',
                  pusetime:'续航时间：<span>低亮30流明(40小时)</span>',
                  pled:'LED：<span>Cree XM-L2 U2 LED</span>',
                  pbretty:'使用电池：<span>1x18650/CR123A(RCR123A/16340)</span>',
                  pmoreurl:'T16R-CU.php',
                  pbuyurl:'http://item.jd.com/11165740258.html',
                  pdburl:''
              },
              {
                  ptitle:'C25C Ti',
                  pdec:'<p>小霸王980流明掌中宝</p><p>双键触摸侧按开</p><p>不锈钢头部压环</p>',
                  pimg:'images/p-C25C-Ti.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>856 流明</span>',
                  prange:'最大射程：<span>399 米</span>',
                  pweight:'手电重量：<span>92.2g</span>',
                  pusetime:'续航时间：<span>16流明(80小时)</span>',
                  pled:'LED：<span>Cree XM-L2 U2 LED</span>',
                  pbretty:'使用电池：<span>1x18650/2xCR123A</span>',
                  pmoreurl:'#',
                  pbuyurl:'http://item.jd.com/11061648633.html',
                  pdburl:''
              },
              {
                  ptitle:'M25C Ti',
                  pdec:'<p>高档钛合金精雕细琢而成</p><p>创意轻触钛合金开关</p><p>最高亮856流明</p>',
                  pimg:'images/p-M25C-Ti.png',
                  pnew:false,
                  phot:false,
                  pbright:'最高亮度：<span>1000 流明</span>',
                  prange:'最大射程：<span>200 米</span>',
                  pweight:'手电重量：<span>108.5g</span>',
                  pusetime:'续航时间：<span>低亮30流明(40小时)</span>',
                  pled:'LED：<span>Cree XM-L2 U3 LED</span>',
                  pbretty:'使用电池：<span>1x18650/2xCR123A(RCR123A/16340)</span>',
                  pmoreurl:'M25C-TI.php',
                  pbuyurl:'http://sunwayman.jd.com',
                  pdburl:''
              }
          ]
        },
        {
          fimg:'images/2-product-6-1.png',
          bimg:'images/2-product-6.png', 
          cpdes:'迷你精灵',
          plist:[
              {
                  ptitle:'Ti comet',
                  pdec:'<p>“颗粒”级MINI钛合金手电</p><p>优质金属反光杯，光线柔和</p><p>高品质TC4经CNC精密加工</p>',
                  pimg:'images/p-Ti-comet.png',
                  pnew:true,
                  phot:true,
                  pbright:'最高亮度：<span>88 流明</span>',
                  prange:'最大射程：<span>50 米</span>',
                  pweight:'手电重量：<span>37.1g</span>',
                  pusetime:'续航时间：<span>20流明，30小时</span>',
                  pled:'LED：<span>CREE XQ-E R2 LED</span>',
                  pbretty:'使用电池：<span>1x10810</span>',
                  pmoreurl:'#',
                  pbuyurl:'http://item.jd.com/11566678699.html',
                  pdburl:''
              }
          ]
        },
        {
          fimg:'images/2-product-7-1.png',
          bimg:'images/2-product-7.png', 
          cpdes:'精品配件',
          plist:[
              {
                  ptitle:'AP-18',
                  pdec:'<p>3400mAh锂离子充电电池</p><p>钢壳正极防护件</p><p>智能保护电池</p>',
                  pimg:'images/p-AP-18.png',
                  pnew:true,
                  phot:true,
                  pbright:'身长：<span>67mm</span>',
                  prange:'直径：<span>18.4mm</span>',
                  pusetime:'容量：<span>23400mAh</span>',
                  pled:'适应温度：<span>-20°C - -60°C</span>',
                  pmoreurl:'http://item.jd.com/11645803831.html',
                  pbuyurl:'http://item.jd.com/11645803831.html',
                  pdburl:''
              },
              {
                  ptitle:'AP-19',
                  pdec:'<p>3400mAh锂离子充电电池</p><p>钢壳正极防护件</p><p>智能保护电池</p>',
                  pimg:'images/p-AP-19.png',
                  pnew:true,
                  phot:true,
                  pbright:'身长：<span>41mm</span>',
                  prange:'直径：<span>9mm</span>',
                  pusetime:'容量：<span>3400mAh</span>',
                  pled:'特点：<span>百米防水·两米防摔</span>',
                  pmoreurl:'http://item.jd.com/11225699718.html',
                  pbuyurl:'http://item.jd.com/11225699718.html',
                  pdburl:''
              }
          ]
        }
    ]
};

var proList = new Vue({
    el:'#allproducts',
    data:proListObj
});