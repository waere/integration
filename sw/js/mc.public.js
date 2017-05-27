// 网站导航菜单
var webNavObj = {
    showSearchBox:false,
    mobileMenuIco:'&#xe649;',
    menuList:[
        {mid:'m0',surl:'index.php',mtext:'首页',canSee:false,canPCShow:false},
        {mid:'m1',surl:'products.php',mtext:'产品中心',canSee:false,canPCShow:true},
        {mid:'m2',surl:'C22C.php',mtext:'新品推荐',canSee:false,canPCShow:true},
        {mid:'m3',surl:'servers.php',mtext:'服务与支持',canSee:false,canPCShow:true,subList:[
            {subTitle:'服务政策',subUrl:'servers.php'},
            {subTitle:'产品验证',subUrl:'servers.php'},
            {subTitle:'申请评测',subUrl:'servers.php'}
        ]},
        {mid:'m4',surl:'dealers.php',mtext:'经销商',canSee:false,canPCShow:true,subList:[
            {subTitle:'经销商查询',subUrl:'dealers.php'},
            {subTitle:'成为经销商',subUrl:'dealers.php'}
        ]},
        {mid:'m5',surl:'aboutus.php',mtext:'关于',canSee:false,canPCShow:true}
    ]
};
// 产品中心菜单
var productsNavObj = {
    isShow:false,
    isM1Show:false,
    menudesc:'',
    menuimg:'',
    descTitle:'',
    topshow:true,
    toppro:[
        {
            tname:'G20C',
            timg:'images/1_nav_1.png',
            turl:'G20C.php'
        },
        {
            tname:'V11R',
            timg:'images/1_nav_1-2.png',
            turl:'V11R.php'
        },
        {
            tname:'C13R',
            timg:'images/1_nav_1-3.png',
            turl:'C13R.php'
        },
        {
            tname:'D40A',
            timg:'images/1_nav_1-4.png',
            turl:'D40A.php'
        }
    ],
    sunmenu: [
            {
                mtitle: "EDC探秘",
                mdd: [
                    {
                        mtitle: "T16R",
                        murl: "T16R.php",
                        mdesc: "明镜 · 智芯 · 致精巧<br>钥匙扣级手电<br>高品质航空T6级铝材",
                        mimg: "images/p-T16R.png"
                    },
                    {
                        mtitle: "V11R",
                        murl: "V11R.php",
                        mdesc: "无级磁控战术手电<br>设计精良·调光新颖<br>可拓展EDC手电",
                        mimg: "images/p-V11R.png"
                    },
                    {
                        mtitle: "C13R",
                        murl: "C13R.php",
                        mdesc: "多功能一键开关<br>USB智能充电系统手电<br>Mini体积，一手掌握",
                        mimg: "images/p-C13R.png"
                    }
                ]
            },
            {
                mtitle: "便携户外",
                mdd: [
                    {
                        mtitle: "C22C",
                        murl: "C22C.php",
                        mdesc: "业界领先，手电、L型灯和谐统一<br>380流明 双灯同亮“夜行者<br>梯形螺纹，顺滑可靠",
                        mimg: "images/p-C22C.png"
                    },
                    {
                        mtitle: "T26C",
                        murl: "T26C.php",
                        mdesc: "袖珍级18650手电<br>明镜·智芯·致精巧<br>光学凸透镜系统",
                        mimg: "images/p-T26C.png"
                    },
                    {
                        mtitle: "C23C",
                        murl: "C23C.php",
                        mdesc: "充电轻触系列<br>智能USB充电系统<br>经典黑银两色",
                        mimg: "images/p-C23C.png"
                    }
                ]
            },
            {
                mtitle: "纵度搜索",
                mdd: [
                    {
                        mtitle: "G20C",
                        murl: "G20C.php",
                        mdesc: "势在·型在·智能<br>1000流明军警级手电<br>军工级硬质氧化膜",
                        mimg: "images/p-G20C.png"
                    },
                    {
                        mtitle: "G25C",
                        murl: "G25C.php",
                        mdesc: "1000流明<br>双尾按“双子座”手电<br>轻触式主按钮开关",
                        mimg: "images/p-G25C.png"
                    },
                    {
                        mtitle: "T20CC",
                        murl: "T20CC.php",
                        mdesc: "暴力唯美BOSS级手电<br>智能USB充电系统<br>航空T6级铝材",
                        mimg: "images/p-T20CC.png"
                    },
                    {
                        mtitle: "T25C",
                        murl: "T25C.php",
                        mdesc: "凸透镜的光明之旅<br>光学凸透镜系统<br>浪漫酒吧射灯",
                        mimg: "images/p-T25C.png"
                    },
                    {
                        mtitle: "P25C",
                        murl: "P25C.php",
                        mdesc: "1000流明侧按随身“闪电小子”<br>尾部双键式明星级设计<br>高档头灯带",
                        mimg: "images/p-P25C.png"
                    }
                ]
            },
            {
                mtitle: "野外战术",
                mdd: [
                    {
                        mtitle: "D40A",
                        murl: "D40A.php",
                        mdesc: "小霸王980流明掌中宝<br>双键触摸侧按开<br>不锈钢头部压环",
                        mimg: "images/p-D40A.png"
                    },
                    {
                        mtitle: "T40CS",
                        murl: "#",
                        mdesc: "中白光远射型侧按战术手电<br>航天级铝合金制造<br>有效射程达500米",
                        mimg: "images/p-T40CS.png"
                    },
                    {
                        mtitle: "T60CS",
                        murl: "#",
                        mdesc: "可充电三头侧按手电<br>三孔优质金属光面反光杯<br>增韧超清晰钢化玻璃镜片",
                        mimg: "images/p-T60CS.png"
                    }
                ]
            },
            {
                mtitle: "限量收藏",
                mdd: [
                    {
                        mtitle: "T16R-CU",
                        murl: "T16R-CU.php",
                        mdesc: "小霸王980流明掌中宝<br>双键触摸侧按开<br>不锈钢头部压环",
                        mimg: "images/p-T16R.CU.png"
                    },
                    {
                        mtitle: "C25C Ti",
                        murl: "#",
                        mdesc: "小霸王980流明掌中宝<br>双键触摸侧按开<br>不锈钢头部压环",
                        mimg: "images/p-C25C-Ti.png"
                    },
                    {
                        mtitle: "M25C Ti",
                        murl: "#",
                        mdesc: "高档钛合金精雕细琢而成<br>创意轻触钛合金开关<br>最高亮856流明",
                        mimg: "images/p-M25C-Ti.png"
                    }
                ]
            },
            {
                mtitle: "迷你精灵",
                mdd: [
                    {
                        mtitle: "Ti comet",
                        murl: "#",
                        mdesc: "“颗粒”级MINI钛合金手电<br>优质金属反光杯，光线柔和<br>高品质TC4经CNC精密加工",
                        mimg: "images/p-Ti-comet.png"
                    }
                ]
            },
            {
                mtitle: "配套精品",
                mdd: [
                    {
                        mtitle: "AP-18",
                        murl: "#",
                        mdesc: "3400mAh锂离子充电电池<br>钢壳正极防护件<br>智能保护电池",
                        mimg: "images/p-AP-18.png"
                    },
                    {
                        mtitle: "AP-19",
                        murl: "#",
                        mdesc: "钛栅栏·暗夜启明星<br>多彩氚管信号灯挂坠<br>高级别TC4钛材料",
                        mimg: "images/p-AP-19.png"
                    }
                ]
            }
        ]
};

// 新品子菜单
var newProductsNavObj = {
    isShow:false,
    isM2Show:false,
    newProList:[
        {
            npTitle:'C22C',
            npUrl:'C22C.php',
            npImg:'images/p-C22C.png',
            npDesc:'业界领先，手电、L型灯和谐统一<br>380流明 双灯同亮“夜行者<br>梯形螺纹，顺滑可靠'
        },
        {
            npTitle:'C23C',
            npUrl:'C23C.php',
            npImg:'images/p-C23C.png',
            npDesc:'充电轻触系列<br>智能USB充电系统<br>经典黑银两色'
        },
        {
            npTitle:'T20CC',
            npUrl:'T20CC.php',
            npImg:'images/p-T20CC.png',
            npDesc:'暴力唯美BOSS级手电<br>智能USB充电系统<br>航空T6级铝材'
        },
        {
            npTitle:'T25C',
            npUrl:'T25C.php',
            npImg:'images/p-T25C.png',
            npDesc:'凸透镜的光明之旅<br>光学凸透镜系统<br>浪漫酒吧射灯'
        }
    ]
};

var bottomNavObj = {
    hideClass:'hidden-xs',
    btNavList:[
        {
            dtTitle:'关于我们',
            dtUrl:'aboutus.php',
            ddLits:[
                {
                    ddName:'品牌介绍',
                    ddUrl:'aboutus.php'
                },
                {
                    ddName:'发展历程',
                    ddUrl:'aboutus.php'
                },
                {
                    ddName:'联系我们',
                    ddUrl:'aboutus.php'
                },
                {
                    ddName:'在线留言',
                    ddUrl:'aboutus.php'
                }
            ]
        },
        {
            dtTitle:'经销商',
            dtUrl:'dealers.php',
            ddLits:[
                {
                    ddName:'经销商查询',
                    ddUrl:'dealers.php'
                },
                {
                    ddName:'成为经销商',
                    ddUrl:'dealers.php'
                }
            ]
        },
        {
            dtTitle:'产品中心',
            dtUrl:'products.php',
            ddLits:[
                {
                    ddName:'野外战术',
                    ddUrl:'products.php'
                },
                {
                    ddName:'便携户外',
                    ddUrl:'dealers.php'
                },
                {
                    ddName:'纵度搜索',
                    ddUrl:'dealers.php'
                },
                {
                    ddName:'EDC探密',
                    ddUrl:'dealers.php'
                },
                {
                    ddName:'限量收藏',
                    ddUrl:'dealers.php'
                },
                {
                    ddName:'迷你精灵',
                    ddUrl:'dealers.php'
                },
                {
                    ddName:'配套精品',
                    ddUrl:'dealers.php'
                }
            ]
        },
        {
            dtTitle:'服务与支持',
            dtUrl:'servers.php',
            ddLits:[
                {
                    ddName:'售后服务政策',
                    ddUrl:'servers.php'
                },
                {
                    ddName:'产品验证',
                    ddUrl:'servers.php'
                },
                {
                    ddName:'申请评测',
                    ddUrl:'servers.php'
                }
            ]
        },
        {
            dtTitle:'下载中心',
            dtUrl:'#',
            ddLits:[
                {
                    ddName:'产品手册',
                    ddUrl:'#'
                },
                {
                    ddName:'产品说明书',
                    ddUrl:'#'
                },
                {
                    ddName:'其他',
                    ddUrl:'#'
                }
            ]
        },
        {
            dtTitle:'教育',
            dtUrl:'#',
            ddLits:[
                {
                    ddName:'常见问题',
                    ddUrl:'#'
                },
                {
                    ddName:'视频讲座',
                    ddUrl:'#'
                },
                {
                    ddName:'相关知识',
                    ddUrl:'#'
                }
            ]
        }
    ],
    btIcoList:[
        {
            btIco:'&#xe607;',
            btIcoUrl:'###'
        },
        {
            btIco:'&#xe60a;',
            btIcoUrl:'###'
        },
        {
            btIco:'&#xe605;',
            btIcoUrl:'###'
        },
        {
            btIco:'&#xe603;',
            btIcoUrl:'###'
        },
        {
            btIco:'&#xe609;',
            btIcoUrl:'###'
        },
        {
            btIco:'&#xe60b;',
            btIcoUrl:'###'
        }
    ]
};

// 顶部导航菜单
var topMneu = new Vue({
    el:'#topMainMenu',
    data:webNavObj,
    methods:{
        showMenu:function(mid){
            cpMenu_m1.$data.isShow = false;
            cpMenu_m2.$data.isShow = false;
            this.menuList[3].canSee = false;
            this.menuList[4].canSee = false;
            if(mid == 'm1')
            {
                cpMenu_m1.$data.isShow = true;
            }
            if(mid == 'm2')
            {
                cpMenu_m2.$data.isShow = true;
            }
            // for(var i=0,i=i+1;i<=this.menuList.length;i++)
            // {
            //     if(("m"+i) == mid)
            //     {
            //         eval("cpMenu_m" + i).$data.isShow = true;
            //     }
            //     else
            //     {
            //         eval("cpMenu_m" + i).$data.isShow = false;
            //     }
            // }
            if(mid == 'm3')
            {
                this.menuList[3].canSee = true;
            }
            if(mid == 'm4')
            {
                this.menuList[4].canSee = true;
            }
        }
    }
});

//移动端菜单选项
var mobileMenu = new Vue({
    el:'#mobileNavBox',
    data:{
        mobileMenuShow:false
    },
    methods:{
        changMenuIco:function(){
            this.mobileMenuShow = !this.mobileMenuShow;
            if(this.mobileMenuShow)
            {
                topMneu.$data.mobileMenuIco = '&#xe600;';
            }
            else
            {
                 topMneu.$data.mobileMenuIco = '&#xe649;';
                 mbProductsSubList.$data.isM1Show = false;
                 mbNPList.$data.isM2Show = false;
            }
        },
        showMbAllProductsSub:function(){
            mbNPList.$data.isM2Show = false;
            mbProductsSubList.$data.isM1Show = !mbProductsSubList.$data.isM1Show;
        },
        showNewProSubIntro:function(){
            mbProductsSubList.$data.isM1Show = false;
            mbNPList.$data.isM2Show = !mbNPList.$data.isM2Show;
        }
    }
}); 

// 网站子菜单产品中心
var cpMenu_m1 = new Vue({
    el:'#subMenu1',
    methods:{
        showtips:function(desc,img,title){
            // alert(desc+img);
            this.menudesc = desc;
            this.menuimg = img;
            this.descTitle = title;
            this.topshow = false;
        }
    },
    data:productsNavObj
});
// 网站子菜单新品
var cpMenu_m2 = new Vue({
    el:'#subMenu2',
    data:newProductsNavObj
});
// 网站子菜单新品
var cpMenu_m3 = new Vue({
    
});
// 网站子菜单新品
var cpMenu_m4 = new Vue({
    
});

// 底部导航菜单
var btMenuList = new Vue({
    el:"#publicBottom",
    data:bottomNavObj,
    methods:{
        Icohover:function(index){
            console.log(index);
            if(($(window).width()>767)&&(index == 4)){
                $('.wx-erweima').stop().fadeIn();
            }
        },
        IcohoverAfter:function(index){
            if(($(window).width()>767)&&(index == 4)){
                $('.wx-erweima').stop().fadeOut();
            }            
        }
    }
});
// 移动端产品菜单
var mbProductsSubList = new Vue({
    el:"#mcpcenter",
    data:productsNavObj
});

// 移动端新品菜单
var mbNPList = new Vue({
    el:"#mcNpcenter",
    data:newProductsNavObj
});