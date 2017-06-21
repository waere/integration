// 移动端滚动
var myScroll;
function loaded () {
    myScroll = new IScroll('#wrapper', { eventPassthrough: true, scrollX: true, scrollY: false, preventDefault: false });
}
// 动画效果初始化
new WOW().init();
// 懒加载
$(document).ready(function(){ 
    $("img").lazyload({effect: "fadeIn"});
    changeSixList();
});
// 改变窗口大小时动作
$(window).resize(function(){
    changeSixList();
});

// 滚动时产品菜单项置顶
$(document).scroll(function(){
    var oft = $(".products-showBox").height();
    var sct = $(document).scrollTop();
    var cz = sct-oft;            
    if(cz >= 60)
    {
        $("#prMenuBox").css({"z-index":99999,"position":"fixed"});
    }
    else
    {
        $("#prMenuBox").css({"z-index":1,"position":"inherit"});
    }    
});
// 返回页面顶部
function pageScroll() { 
    $('body').animate({scrollTop: 0}, 500); 
}
// 滚动监听
$('body').scrollspy({
    offset:150,
    target: '#prMenuBox'
})
// 平滑滚动到指定锚点
$("a.xiangqing,a.maidian,a.shiyong,a.canshu,a.peijian").click(function() {  
    $("html, body").animate({  
        scrollTop: $($(this).attr("href")).offset().top - 60 + "px"  
    }, {  
        duration: 500,  
        easing: "swing"  
    });  
    return false;  
}); 
// 窗口小于992px时把底部6个分类设为显示2个并滚动
function changeSixList()
{
    if($(document).width() <= 992)
    {
        $("#scroller").width($(document).width()*3+10);
        $("#wrapper").height($(document).width()/2+40);
        loaded();                
        $(".np-scroller li").each(function(){
            $(this).width($(document).width()/2-20);
            $(this).height($(document).width()/2-10);                    
        });
    }
    //动画框统一左边框
    $(".aL").each(function(){
        $(this).css("left",$(".index-logo").offset().left+"px");
    });
    // 动画框统一右边框
    $(".aR").each(function(){
        $(this).css("right",$(document).width()-($(".index-lang-box").width()*2+$(".index-lang-box").offset().left)+"px");
    });
}

// 文件下载
function download(href, title) {
    if(href == '' || title == ''){
        return false;
    }else{
       const a = document.createElement('a');
        a.setAttribute('href', href);
        a.setAttribute('download', title);
        a.click(); 
    }                    
}

/**
 * 产品底部那6个翻转图片的数据
 */
var sixObj = {
    list:[
        {
            frontImg:'images/2-product-1-1.png',
            backImg:'images/2-product-1.png',
            linkUrl:'products.php',
            frontState:false,
            fsw:false,
            backState:false
        },
        {
            frontImg:'images/2-product-2-1.png',
            backImg:'images/2-product-2.png',
            linkUrl:'products.php',
            frontState:false,
            fsw:false,
            backState:false
        },
        {
            frontImg:'images/2-product-3-1.png',
            backImg:'images/2-product-3.png',
            linkUrl:'products.php',
            frontState:false,
            fsw:false,
            backState:false
        },
        {
            frontImg:'images/2-product-4-1.png',
            backImg:'images/2-product-4.png',
            linkUrl:'products.php',
            frontState:false,
            fsw:false,
            backState:false
        },
        {
            frontImg:'images/2-product-5-1.png',
            backImg:'images/2-product-5.png',
            linkUrl:'products.php',
            frontState:false,
            fsw:false,
            backState:false
        },
        {
            frontImg:'images/2-product-6-1.png',
            backImg:'images/2-product-6.png',
            linkUrl:'products.php',
            frontState:false,
            fsw:false,
            backState:false
        }
    ]
};
// pc端
var sixnav = new Vue({
    el:'#sixNav',
    data:sixObj,
    methods:{
        enterAction:function(i){
            this.list[i]['fsw'] = true;
            this.list[i]['frontState'] = false;
            this.list[i]['backState'] = true;
        },
        leaveAction:function(i){
            this.list[i]['fsw'] = false;
            this.list[i]['frontState'] = true;
            this.list[i]['backState'] = false;
        }
    }
});
// 移动端
var mSixNav = new Vue({
    el:'#scroller',
    data:sixObj,
    methods:{
        goUrl:function(ss){
            window.location.href = ss;
        }
    }
});