<div class="public-bottom" id="publicBottom" v-cloak>
        <div class="container-fluid">
            <!--搜索框-->
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 public-bottom-searchBox">
                    <form action="search.php" method="get">
                        <input type="text" name="bottomsearch" id="bottomsearch" placeholder="请输入关键词搜索......" />
                        <input type="submit" value="SEARCH">
                    </form>                    
                </div>
            </div>            
        </div>
        <div class="container">
            <!--底部导航栏-->
            <div class="row public-bottom-navBox">
                <div class="col-xs-12 col-md-10 listBNav">
                    <dl class="col-xs-4 col-md-2" v-for="dlitem in btNavList">
                        <dt><a v-bind:href="dlitem.dtUrl">{{dlitem.dtTitle}}</a></dt>
                        <dd v-for="dditem in dlitem.ddLits" v-bind:class="hideClass"><a v-bind:href="dditem.ddUrl">{{dditem.ddName}}</a></dd>
                    </dl>
                   
                </div>
                <div class="col-xs-12 col-md-2 listBNavIco">
                    <ul>
                        <li v-for="(icoItem,index) in btIcoList" v-on:mouseenter="Icohover(index)" v-on:mouseleave="IcohoverAfter(index)"><a v-bind:href="icoItem.btIcoUrl"><i class="iconfont" v-html="icoItem.btIco"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="public-bottom-copyright">
            <div class="container">
                <div class="row" style="position:relative;">
                    <div class="col-md-2 col-xs-12 public-bottom-logobox">
                        <a href="index.php">
                            <img src="images/logo.png"  />
                        </a>   
                    </div>
                    <div class="wx-erweima">
                        <img class="hidden-xs pcimg" src="images/erweima.jpg" alt="二维码">
                        <img class="visible-xs-inline mimg" src="images/erweima-s.jpg" alt="二维码">
                    </div>
                    <div class="col-md-5 col-xs-12 public-bottom-copytext">
                        Copyright &copy;  2017 SUNWAYMAN Inc. All rights reserved.
                    </div>
                    <div class="col-md-5 col-xs-12 public-bottom-link">
                        <a href="#">隐私权政策</a> | 
                        <a href="#">使用条款</a> | 
                        <a href="law.php">免责声明</a>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm hidden-md iconfont public-bottom-goIndex">
                        <a href="#">&#xe76d; 返回首页</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>