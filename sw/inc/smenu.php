<!--移动所有产品左侧菜单-->
    <div id="mcpcenter" class="hidden-md hidden-lg">
        <transition
            name="MC05-transition"
            enter-active-class="animated fadeInRight"
            leave-active-class="animated fadeOutRight"
        >
        <div class="m-menuLeftBox" v-if="isM1Show">
            <div class="cpcenter">
                <div class="cpCenterBtn">
                    <a href="products.php">全部产品</a>
                </div>
                <dl v-for="item in sunmenu">
                    <dt>{{item.mtitle}}</dt>
                    <dd v-for="dd in item.mdd">
                        <a v-bind:href="dd.murl">{{dd.mtitle}}</a>
                    </dd>
                </dl>
            </div>
        </div>
        </transition>
    </div>

    <!--移动最新产品左侧菜单-->
    <div id="mcNpcenter" class="hidden-md hidden-lg">
        <transition
            name="MC05-transition"
            enter-active-class="animated fadeInRight"
            leave-active-class="animated fadeOutRight"
        >
        <div class="m-menuLeftBox" v-if="isM2Show">

            <div class="newProMBox" v-for="np in newProList">
                 <a v-bind:href="np.npUrl" style="color:#333">
                    <div class="newProMBox-img">
                        <img v-bind:src="np.npImg" class="img-responsive">
                    </div>
                    <div class="newProTextBox">
                        <div class="newProTextBox-Title" v-text="np.npTitle">
                            
                        </div>
                        <div class="newProTextBox-Intro" v-html="np.npDesc">
                           
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
        </transition>
    </div>
    
    <div class="mobileMenuDiv hidden-md hidden-lg" id="mobileNavBox">
        <transition
            name="MC04-transition"
            enter-active-class="animated fadeInRight"
            leave-active-class="animated fadeOutRight"
        >
        <div class="m-public-meunbox" v-if="mobileMenuShow">            
            <!--移动端右侧菜单-->
            <div class="m-menuRightBox">
                <div class="menuRightNav">
                    <ul>
                        <!--<li v-for="item in topMneu.$data.menuList"><a v-bind:href="item.surl">{{item.mtext}}</a></li>-->
                        <li><a href="index.php">首页</a></li>
                        <li><a href="javascript:mobileMenu.showMbAllProductsSub();">产品中心</a></li>
                        <li><a href="javascript:mobileMenu.showNewProSubIntro();">新品推荐</a></li>
                        <li><a href="servers.php">服务与支持</a></li>
                        <li><a href="dealers.php">经销商</a></li>
                        <li><a href="aboutus.php">关于</a></li>
                    </ul>
                </div>
                <div class="m-menuRightShopBtn">
                    <a href="http://sunwayman.jd.com" target="view_window">
                        商城
                        <span class="iconfont">&#xe615;</span>
                    </a>
                </div>
                <div class="m-menuRightLangBtn">
                    <a href="#">
                        语言
                        <span class="iconfont">&#xe613;</span>
                    </a>
                </div>
            </div>
        </div>
        </transition>
    </div>