<div class="index-box navbar-fixed-top" id="topMainMenu" v-cloak>
        <div class="container index-topmenu-bg">
            <div class="row">
                <div class="col-md-3 col-xs-6 index-logo">
                    <a href="index.php">
                        <img src="images/logo.png" class="img-responsive" />
                    </a>                    
                </div>
                <div class="col-md-5 index-menu-list hidden-sm hidden-xs">
                    <div class="navList" v-for="item in menuList">
                        <a v-bind:href="item.surl"  v-on:mouseenter="showMenu(item.mid);" v-if="item.canPCShow">
                            {{item.mtext}}                        
                        </a>
                        <transition
                            name="MC03-transition"
                            enter-active-class="animated fadeIn"
                            leave-active-class="animated fadeOut"
                        >
                        <div class="index-menu-sublist" v-if="item.canSee" v-on:mouseleave="item.canSee = false">                            
                            <ul>
                                <li v-for="sub in item.subList"><a v-bind:href="sub.subUrl">{{sub.subTitle}}</a></li>
                            </ul>                            
                        </div>
                        </transition>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="col-xs-10 col-md-6 search-box" id="topSearch">
                        <a href="javascript:void(0);" v-on:click="showSearchBox = !showSearchBox" class="iconfont search-box">&#xe612;</a>
                        <transition
                            name="MC01-transition"
                            enter-active-class="animated bounceInRight"
                            leave-active-class="animated bounceOutRight"
                        >
                        <div class="search-input-box" id="searchbox" v-if="showSearchBox">
                            <form action="search.php" method="get">
                                <input type="text" placeholder="请输入关键词" id="searchkey">
                            </form>
                        </div>
                        </transition>
                    </div>
                    <div class="col-xs-4 col-md-4 index-jd-box hidden-sm hidden-xs">
                        <a href="http://sunwayman.jd.com" target="view_window">
                            京东商城
                            <img src="images/buycarIco.png" />
                        </a>                        
                    </div>
                    <div class="col-xs-2 col-md-2 index-lang-box hidden-sm hidden-xs">
                        <a href="#"><img src="images/lang.png" /></a>
                    </div>
                    <div class="col-xs-2 hidden-lg hidden-md mobile-topmenu-box">
                        <a href="javascript:void(0);" class="iconfont mobile-topmenu-ico" id="mobileMenu" v-on:click="mobileMenu.changMenuIco();" v-html="mobileMenuIco"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--菜单栏-->
    <div id="subMenu1" v-cloak>
        <transition
            name="MC02-transition"
            enter-active-class="animated fadeIn"
            leave-active-class="animated fadeOut"
        >
        <div class="index-menu-box navbar-fixed-top" v-if="isShow" v-on:mouseleave="isShow=false">
            <div class="container" style="padding-top:20px;">
                <div class="col-md-9 menuList">
                    <!--绑定菜单数据-->
                    <dl v-for="item in sunmenu">
                        <dt>{{item.mtitle}}</dt>
                        <dd v-for="dd in item.mdd">
                            <a v-bind:href="dd.murl" v-on:mouseover="showtips(dd.mdesc,dd.mimg,dd.mtitle);">{{dd.mtitle}}</a>
                        </dd>
                    </dl>
                </div>
                <!--右侧简介及图片-->
                <div class="col-md-3 tipsBox">
                    <div class="tipsDesc">
                        <div v-text="descTitle" class="rightDescTitle"></div>
                        <div v-html="menudesc" class="rightDescText"></div>
                    </div>                
                    <div class="tipsImages">
                        <img v-bind:src="menuimg" class="img-responsive" />
                    </div>
                    <div class="tipsFourPro" v-show="topshow">                        
                        <a :href="mc.turl"  v-for="mc in toppro"><img :src="mc.timg" :alt="mc.tname"></a>
                    </div>
                </div>
                <div class="col-md-12 allproducts">
                    <div class="showallbtn">
                        <a href="products.php">全部产品</a>
                    </div>
                </div>
                
            </div>
        </div>
        </transition>
    </div>
    <div id="subMenu2" v-cloak>
        <transition
            name="MC03-transition"
            enter-active-class="animated fadeIn"
            leave-active-class="animated fadeOut"
        >
        <div class="index-menu-box navbar-fixed-top" v-if="isShow" v-on:mouseleave="isShow=false">
            <div class="container" style="padding-top:20px;">
                <div class="col-md-3 newP_tipsBox" v-for="np in newProList">
                    <a v-bind:href="np.npUrl" v-on:mouseover="">
                        <div class="newP_tipsDesc">
                            <div v-text="np.npTitle" class="newP_rightDescTitle"></div>
                            <div v-html="np.npDesc" class="newP_rightDescText"></div>
                        </div>                
                        <div class="newP_tipsImages">
                            <img v-bind:src="np.npImg" class="img-responsive" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </transition>
    </div>