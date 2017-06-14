// 幻灯片
var mySwiper = new Swiper ('.swiper-container', {
    // initialSlide :5,
    autoplay : 5000,
    loop: true, 
    // 如果需要分页器
    pagination: '.swiper-pagination',
    paginationClickable :true,  
    // 如果需要前进后退按钮
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
        swiperAnimateCache(swiper); //隐藏动画元素 
        swiperAnimate(swiper); //初始化完成开始动画
    }, 
    onSlideChangeEnd: function(swiper){ 
        swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
    }    
});
// 视频
$(document).ready(function(){
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
            src: 'video/video1.mp4',
            type: 'video/mp4'
        },
        {
            src: 'video/video1.webm',
            type: 'video/webm;codecs="vp8, vorbis"'
        }
        ],
        // What to do once video loads (initial frame)
        onLoad: function () {
        document.querySelector('#video_cover').style.display = 'none';
        }
    });
    // 初始化幻灯片最大高度
    $(".swiper-slide").css('max-height',$(window).height()-60+'px');
    // 初始化
    $("#three01,#three02,#three03,#three011,#three012,#three013").css("height",$("#threePart01").width()*0.54+"px");
    $(".three-MPart").each(function(){
        $(this).css("width",$(document).width()*0.7+"px");
        $(this).css("height",$(this).width()*0.54+"px");
        $(".mthree-wrapper").css("width",$(this).width()*3+20+"px");
    });
    $(".three-Mobile-Box").scrollLeft($(document).width()*0.57);
    // 窗口变化时重置高度
    $(window).resize(function(){
        $("#three01,#three02,#three03,#three011,#three012,#three013").css("height",$("#threePart01").width()*0.54+"px");
        $(".three-MPart").each(function(){
            $(this).css("width",$(document).width()*0.7+"px");
            $(this).css("height",$(this).width()*0.54+"px");
            $(".mthree-wrapper").css("width",$(this).width()*3+20+"px");
        });
        changThreeIcoFlex();
    });

    setInterval("changThreeIcoFlex()",1000);
    // 翻转专题

    $("#threePart01").mouseenter(function(){
        $("#three01").removeClass("slideInDown");
        $("#three011").removeClass("slideOutDown");
        $("#three01").addClass("animated slideOutUp");
        $("#three011").show();
        $("#three011").addClass("animated slideInUp");
        $("#three011").css("width",$("#three01").width()+"px");
    });
    $("#threePart01").mouseleave(function(){
        $("#three01").removeClass("slideOutUp");
        $("#three011").removeClass("slideInUp");
        $("#three01").addClass("animated slideInDown");
        $("#three011").addClass("animated slideOutDown");
    });

    $("#threePart02").mouseenter(function(){
        $("#three02").removeClass("slideInDown");
        $("#three012").removeClass("slideOutDown");
        $("#three02").addClass("animated slideOutUp");
        $("#three012").show();
        $("#three012").addClass("animated slideInUp");
        $("#three012").css("width",$("#three02").width()+"px");
    });
    $("#threePart02").mouseleave(function(){
        $("#three02").removeClass("slideOutUp");
        $("#three012").removeClass("slideInUp");
        $("#three02").addClass("animated slideInDown");
        $("#three012").addClass("animated slideOutDown");
    });

    $("#threePart03").mouseenter(function(){
        $("#three03").removeClass("slideInDown");
        $("#three013").removeClass("slideOutDown");
        $("#three03").addClass("animated slideOutUp");
        $("#three013").show();
        $("#three013").addClass("animated slideInUp");
        $("#three013").css("width",$("#three03").width()+"px");
    });
    $("#threePart03").mouseleave(function(){
        $("#three03").removeClass("slideOutUp");
        $("#three013").removeClass("slideInUp");
        $("#three03").addClass("animated slideInDown");
        $("#three013").addClass("animated slideOutDown");
    });

});
function changThreeIcoFlex() {
    $(".mthree-wrapper").css({
        "display":"flex",
        "justify-content":"space-between",
        "flex-wrap":"nowrap"
    });
    $(".three-MPart").each(function(){
        $(this).css({
            "margin-right":"0px"
        });
    });
}
// 新增首页测评部分切换
var chepings = new Vue({
    el:'#cheping',
    data:{
        chepList:[
            {
                uheadimg:'images/cp01.png',
                ubigtitle:'打猎与搜索：野外战术',
                ustitle:'打猎要求亮度一定要高，续航时间相对可以短一些，同时手电最好具备冲击特性，以免被部分有后坐力的机械冲击损坏。此类手电泛光不必太宽，聚光适中。<br>而搜索对亮度额要求几乎也是越亮越好，射程同样是非常重要，重量和体积只好放在其次考虑了，可以选择亮大的手电，一般为军用手电。',
                uviewlink:'T16R.php',
                viewstaus:true
            },
            {
                uheadimg:'images/cp02.png',
                ubigtitle:'徒步与露营：便携户外',
                ustitle:'徒步一般不需要太高的亮度，由于时间长，可以尽量选择轻便一些的手电，同时具备较长的续航时间。在一般情况下，手电需要兼顾适中的聚光和泛光。不过领队还是需要亮度高一些的手电，具备一定的射程，在探索地形时更加便利。<br>而露营则泛光一定要好，对亮度需求低，但一定要选择续航时间长的户外手电，最好可以连续照明整晚以上，这样的手电在便利性和食用成本方面具有优势。',
                uviewlink:'C22C.php',
                viewstaus:false
            },
            {
                uheadimg:'images/cp03.png',
                ubigtitle:'速度与激情：夜跑夜骑',
                ustitle:'因为速度快，因此需要良好的亮度，同时对续航时间也有较高要求，最好能达到连续照明4个小时。泛光对夜骑比较重要，聚光部分则不要过于汇聚。<br>夜骑手电对重量不敏感，因此为达到性能要求，可适合选择较大的手电，并注意其是否利于操作以及是够利于夹持。',
                uviewlink:'P25C.php',
                viewstaus:false
            },
            {
                uheadimg:'images/cp04.png',
                ubigtitle:'照亮水下世界：潜水运动',
                ustitle:'潜水手电强调绝对的防水性和可靠性，亮度要求也很高，照明时间则是足够就好（跟你潜水运功的类型有关）。<br>对体积和重量的要求不苛刻，手持灯具适当大一些有利于握持，使用灵活性要好、开关要能够对抗水压，潜水手电多为旋转货拨动开光）。因此，最好有防止脱手的带锁定功能的手绳防止意外脱落。',
                uviewlink:'D40A.php',
                viewstaus:false
            },
            {
                uheadimg:'images/cp05.png',
                ubigtitle:'探险家的秘密：洞穴探险',
                ustitle:'探洞所应对的环境比较险恶，而且洞内岩石反射率低，因此亮度一定要高！洞内的水要求手电具备具备很好的防水特性，<br>同时随时可能的危机情况要求手电要坚固耐用，经过起石头的撞击和跌落而不至于损坏。',
                uviewlink:'T20CC.php',
                viewstaus:false
            },
            {
                uheadimg:'images/cp06.png',
                ubigtitle:'个性应急装备：EDC探密',
                ustitle:'EDC即Every Day Carry的简称，意思是随身携带手电，此类手电一般为微型备用手电，一定要小而轻，以便于随身携带随时可用。在一些紧急情况发生时，往往正是这类随时带在身边的手电可以救你一命。<br>EDC手电由于电源体积的限制，一般亮度低续航长，要么亮度高续航短，功能也不会太多，可以根据自己的需求进行选择。通常如果有主手电，最好选择亮度低续航长的EDC，这样在照明时间方面更有保障一些。',
                uviewlink:'T16R-CU.php',
                viewstaus:false
            },
            {
                uheadimg:'images/cp07.png',
                ubigtitle:'SUNWAYMAN 配套精品',
                ustitle:'SUNWAYMAN 为手电配套了一些急需且个性化的产品，你可以根据自己的手电需且进行选择。',
                uviewlink:'http://mall.jd.com/view_search-649873-5571149-99-0-24-1.html',
                viewstaus:false
            }
        ]
    },
    methods:{
        showChePing:function(id) {
            for(var x = 0;x<this.chepList.length;x++)
            {
                if(x == id)
                {
                    this.chepList[x].viewstaus = true;
                }
                else
                {
                    this.chepList[x].viewstaus = false;
                }
            }
        }
    }
});
