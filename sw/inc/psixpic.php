<div class="nPmd-six-box hidden-xs hidden-sm">
        <div class="container-fluid">
            <div class="row" id="sixNav">

                <div class="col-md-2 six-part" v-for="(v, k) in list" @mouseenter="enterAction(k);" @mouseleave="leaveAction(k);">
                    <div class="sixFront animated" :class="{flipInY:v.frontState}" :id="'s-'+(k+1)+'-1'" v-show="!v.fsw">
                        <a :href="v.linkUrl"><img :src="v.frontImg" class="img-responsive"></a>
                    </div>
                    <div class="sixBack animated" :class="{flipInY:v.backState,flipOutY:!v.backState}" :id="'s-'+(k+1)+'-2'" v-show="v.fsw">
                        <a :href="v.linkUrl"><img :src="v.backImg" class="img-responsive"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="nP-six-box hidden-md hidden-lg" id="wrapper">
        <div class="np-scroller" id="scroller">
            <ul>
                <li v-for="mc in list" @click="goUrl(mc.linkUrl);"><img :src="mc.frontImg" class="img-responsive"></li>
            </ul>
        </div>
    </div>