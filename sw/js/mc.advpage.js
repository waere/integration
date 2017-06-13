// ready
$(function(){
    changeAdvBNav();
});
// 改变窗口大小时设定底部导航高度
$(window).resize(function(){
    changeAdvBNav();
});
function changeAdvBNav()
{
    $(".advBottomBg").css({"height":$(this).width()*0.21+"px"});
    // $(".advBottomBg:eq(1)").css({"height":$(this).width()*0.21+"px"});
    // $(".advBottomBg:eq(2)").css({"height":$(this).width()*0.21+"px"});
    $(".navFlexL,.navFlexR").css({"margin-top":$(".advBottomBg").height()/2-$(".navFlexL").height()/2+"px"});
    // console.log($(".index-logo").offset().left);
    $(".zhishiqi").css("top",($(window).height() - $(".zhishiqi").height())/2 + "px");
}
// 小分类菜单数据
var sNavObj = {
    nv1Status:true,
    nv2Status:false,
    nv3Status:false
};
// 内容置顶菜单
var advNavBar = new Vue({
    el:"#prMenuBox",
    data:sNavObj,
    methods:{
        changeTab:function(n){
            // changeAdvBNav();
            switch (n)
            {
                case 1:
                    this.nv2Status = this.nv3Status = false;
                    this.nv1Status = true;
                    $('body').animate({scrollTop:0},300);
                    break;
                case 2:
                    this.nv1Status = this.nv3Status = false;
                    this.nv2Status = true;
                    $('body').animate({scrollTop:0},300);
                    break;
                case 3:
                    this.nv1Status = this.nv2Status = false;
                    this.nv3Status = true;
                    $('body').animate({scrollTop:0},300);
                    break;
            }
        }
    }
});
// 顶部形象图
var dtBrand = new Vue({
    el:"#advBrandShow",
    data:sNavObj
});
// 产品详情
var dtDetail = new Vue({
    el:"#advDetail",
    data:sNavObj
});
// 产品场景
var dtScenario = new Vue({
    el:"#advScenario",
    data:sNavObj
});
// 产品参数
var dtParam = new Vue({
    el:"#advParam",
    data:sNavObj
});