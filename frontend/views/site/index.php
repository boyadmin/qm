<?php
use common\models\System;

$sysconfig=System::find()->where(['id'=>1])->asArray()->one();

$this->registerMetaTag(['name' => 'keywords', 'content' =>$sysconfig['keyword']]);
$this->registerMetaTag(['name' => 'description', 'content' => $sysconfig['description']]);
$this->title = $sysconfig['webname'];
?>

<div class="about">
    <article class="container text-center">
        <h2 class="h-h2">关于启明网络 About US</h2>
        <div class="m-shu">创意品牌，创造价值</div>
        <div class="about-us"> <p>随州启明网络作为一家创新型公司，我们致力于为广告主、品牌主、媒体代理公司、广告创意公司等，提供创新的、即时的、实效的、最可信赖的个性化无线应用整合解决方案。我们将感性的互动整合创意结合理性的技术支持平台，利用移动数字特定的媒体属性。。</p></strong> </div>
        <p> </p>
    </article>
    <!-- Video -->
    <div class="modal fade" id="myVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">企业视频</h4>
                </div>
                <div class="modal-body text-center">
                    <embed class="visible-lg" src="/skin/flash/v.swf" allowFullScreen="true" quality="high" width="100%" height="310px" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
                    <!--<video class="visible-xs visible-sm visible-md" width="100%" height="310px" controls>
          <source src="#.mp4" type="video/mp4"/>
          <source src="#.ogv" type="video/ogg"/>
          </video>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Video -->
</div>
<!-- about end -->
<!-- fuwu start -->
<div class="fuwu fuwu-bg">
    <section class="container text-center">
        <h2 class="h-h2">我们的服务 Our Services</h2>
        <div class="m-shu">始终以建设温馨、和谐的家园，提升您的居家生活品味为己任。</div>
        <div class="row">
            <figure class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><a href="/a/fuwuxiangmu/" class="pic1"></a>
                <h3><a href="/a/fuwuxiangmu/">营销功能画册<br />
                        <small>Marketing function Design</small></a></h3>
                <p>创意文案，设计创意，品质印刷，凝聚团队靠谱！</p>
            </figure>
            <figure class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><a href="/a/fuwuxiangmu/" class="pic2"></a>
                <h3><a href="/a/fuwuxiangmu/">视觉设计<br />
                        <small>Visual design</small></a></h3>
                <p>线上线下视觉设计一条龙服务，让中小企业品牌有效成长，打造好的视觉效果体验</p>
            </figure>
            <figure class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><a href="/a/fuwuxiangmu/" class="pic3"></a>
                <h3><a href="/a/fuwuxiangmu/">数字营销设计<br />
                        <small>Digital marketing</small></a></h3>
                <p>电脑，手机，微信营销形象设计，实现品牌快速成长，提高销售业绩</p>
            </figure>
            <figure class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><a href="/a/fuwuxiangmu/" class="pic4"></a>
                <h3><a href="/a/fuwuxiangmu/">爆棚创意品牌<br />
                        <small>Bursting with creative brand</small></a></h3>
                <p>小品牌，大创意，投入效果最大化</p>
            </figure>
        </div>
    </section>
</div>
<!-- fuwu end -->
<!-- huanjing start -->
<!-- huanjing end -->
<!-- kehu start -->
<div class="kehu kehu-bg">
    <section class="container text-center">
        <h2 class="h-h2">知名客户 Known Customers</h2>
        <div class="m-shu">世界500强的选择，让优秀的企业更加优秀</div>
        <div class="row xg">
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="天猫"><img src="/skin/images/a7eba6b6cab113400d24e4c528c.jpg" class="ylw-img-responsive" alt="天猫" />
                    <p>天猫</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="中国联想"><img src="/skin/images/9ae08cd5789cae7ab92fd3dafe1.jpg" class="ylw-img-responsive" alt="中国联想" />
                    <p>中国联想</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="顺丰快递"><img src="/skin/images/76dfb5adc02abdcb335ff8d28b2.jpg" class="ylw-img-responsive" alt="顺丰快递" />
                    <p>顺丰快递</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="李宁"><img src="/skin/images/307cd8254ed7c2f565a53d38807.jpg" class="ylw-img-responsive" alt="李宁" />
                    <p>李宁</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="新浪网"><img src="/skin/images/2235ef18cd29c3c5cbf6700eff4.jpg" class="ylw-img-responsive" alt="新浪网" />
                    <p>新浪网</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="当当网"><img src="/skin/images/dfd225d3d6388d044490bd6ce74.jpg" class="ylw-img-responsive" alt="当当网" />
                    <p>当当网</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="京东网"><img src="/skin/images/afd225d3d6388d044490bd6ce74.jpg" class="ylw-img-responsive" alt="京东网" />
                    <p>京东网</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="龙湖地产"><img src="/skin/images/tfd225d3d6388d044490bd6ce74.jpg" class="ylw-img-responsive" alt="龙湖地产" />
                    <p>龙湖地产</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="淘宝返利"><img src="/skin/images/yfd225d3d6388d044490bd6ce74.jpg" class="ylw-img-responsive" alt="淘宝返利" />
                    <p>淘宝返利</p>
                </a></figure>
            <figure class="col-xs-6 col-sm-4 col-md-3 col-lg-20"><a href="/" target="_blank" title="易迅网"><img src="/skin/images/efd225d3d6388d044490bd6ce74.jpg" class="ylw-img-responsive" alt="易迅网" />
                    <p>易迅网</p>
                </a></figure>
        </div>
    </section>
</div>
<!-- kehu end -->
<!-- case start -->
<div class="case">
    <section class="container text-center">
        <h2 class="h-h2">精选案例 Case</h2>
        <div class="m-shu">企业形象展示的窗口，团队能量聚积、展示才华的舞台，伙伴携手共赢、价值创造的发源地
            <p>  <a href='/a/chenggonganli/logo/' target="_blank">标志设计</a> /
                <a href='/a/chenggonganli/guanggaozhizuo/' target="_blank">广告制作</a> /
                <a href='/a/chenggonganli/yingxiaocehua/' target="_blank">营销策划</a> /
                <a href='/a/chenggonganli/baozhuangsheji/' target="_blank">包装设计</a> /
                <a href='/a/chenggonganli/qiyehuace/' target="_blank">企业画册</a> /
                <a href='/a/chenggonganli/haibaosheji/' target="_blank">海报设计</a> /


                <a href="/a/chenggonganli/list_11_1.html" >更多分类...</a> </p>
        </div>
        <div class="row"> <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><a href="/a/chenggonganli/yingxiaocehua/2016/0908/149.html" title="让品牌插上信仰的翅膀" class="pic-link" target="_blank"><span class="case-hover"><span class="hover-link"></span></span><img src="/uploads/160909/1-160Z91I245496.jpg" alt="让品牌插上信仰的翅膀" class="ylw-img-responsive" alt="让品牌插上信仰的翅膀" /></a>
                <h3><a href="/a/chenggonganli/yingxiaocehua/2016/0908/149.html" title="让品牌插上信仰的翅膀">让品牌插上信仰的翅膀</a><br />
                    <small>关注：206 / 目录：<a href='/a/chenggonganli/yingxiaocehua/'>营销策划</a></small></h3>
            </figure>
            <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><a href="/a/chenggonganli/yingxiaocehua/2016/0908/150.html" title="把饰品打造成“珠宝”" class="pic-link" target="_blank"><span class="case-hover"><span class="hover-link"></span></span><img src="/uploads/160909/1-160Z91H942924.jpg" alt="把饰品打造成“珠宝”" class="ylw-img-responsive" alt="把饰品打造成“珠宝”" /></a>
                <h3><a href="/a/chenggonganli/yingxiaocehua/2016/0908/150.html" title="把饰品打造成“珠宝”">把饰品打造成“珠宝”</a><br />
                    <small>关注：85 / 目录：<a href='/a/chenggonganli/yingxiaocehua/'>营销策划</a></small></h3>
            </figure>
            <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><a href="/a/chenggonganli/yingxiaocehua/2016/0907/147.html" title="传统鲜奶节的“新鲜玩法”" class="pic-link" target="_blank"><span class="case-hover"><span class="hover-link"></span></span><img src="/uploads/160907/1-160ZG50644Z4.jpg" alt="传统鲜奶节的“新鲜玩法”" class="ylw-img-responsive" alt="传统鲜奶节的“新鲜玩法”" /></a>
                <h3><a href="/a/chenggonganli/yingxiaocehua/2016/0907/147.html" title="传统鲜奶节的“新鲜玩法”">传统鲜奶节的“新鲜玩法”</a><br />
                    <small>关注：214 / 目录：<a href='/a/chenggonganli/yingxiaocehua/'>营销策划</a></small></h3>
            </figure>
            <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><a href="/a/chenggonganli/yingxiaocehua/2016/0907/148.html" title="裘展皮革贸易革vi设计及品牌形象" class="pic-link" target="_blank"><span class="case-hover"><span class="hover-link"></span></span><img src="/uploads/160907/1-160ZG543011N.jpg" alt="裘展皮革贸易革vi设计及品牌形象" class="ylw-img-responsive" alt="裘展皮革贸易革vi设计及品牌形象" /></a>
                <h3><a href="/a/chenggonganli/yingxiaocehua/2016/0907/148.html" title="裘展皮革贸易革vi设计及品牌形象">裘展皮革贸易革vi设计及品牌形象</a><br />
                    <small>关注：98 / 目录：<a href='/a/chenggonganli/yingxiaocehua/'>营销策划</a></small></h3>
            </figure>
            <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><a href="/a/chenggonganli/guanggaozhizuo/2016/0906/143.html" title="广告牌01" class="pic-link" target="_blank"><span class="case-hover"><span class="hover-link"></span></span><img src="/uploads/160906/1-160Z61I60I38.jpg" alt="广告牌01" class="ylw-img-responsive" alt="广告牌01" /></a>
                <h3><a href="/a/chenggonganli/guanggaozhizuo/2016/0906/143.html" title="广告牌01">广告牌01</a><br />
                    <small>关注：214 / 目录：<a href='/a/chenggonganli/guanggaozhizuo/'>广告制作</a></small></h3>
            </figure>
            <figure class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><a href="/a/chenggonganli/guanggaozhizuo/2016/0906/144.html" title="广告牌02" class="pic-link" target="_blank"><span class="case-hover"><span class="hover-link"></span></span><img src="/uploads/160906/1-160Z61I543540.jpg" alt="广告牌02" class="ylw-img-responsive" alt="广告牌02" /></a>
                <h3><a href="/a/chenggonganli/guanggaozhizuo/2016/0906/144.html" title="广告牌02">广告牌02</a><br />
                    <small>关注：126 / 目录：<a href='/a/chenggonganli/guanggaozhizuo/'>广告制作</a></small></h3>
            </figure>
        </div>
        <p><a href="/a/chenggonganli/list_11_1.html" class="btn btn-success" target="_blank">查看更多 MORE &rarr;</a> </p>
    </section>
</div>
<!-- case end -->
<!-- team start -->
<!-- team end -->
<!-- youshi start -->
<!-- youshi end -->
<!-- news start -->
<div class="news">
    <article class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-13">
                <h3>新闻资讯 News<small class="pull-right"> <a href="#news1" data-toggle="tab" class="active-qh pull-left" title="新闻资讯">新闻资讯</a> <a href="#news2" data-toggle="tab" class="active-qh pull-left" title="新闻资讯">新闻资讯</a></small></h3>
                <div class="tab-content">
                    <ul class="list-unstyled clearfix tab-pane active" id="news1">

                    </ul>
                    <ul class="list-unstyled clearfix tab-pane" id="news2">

                    </ul>
                </div>
                <p><a href="/a/xinwenzixun/gongsixinwen/" >查看更多 MORE &rarr;</a> </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-13 zaz">
                <h3>行业新闻  Article<small class="pull-right"> <a href="#article1" data-toggle="tab" class="active-qh pull-left" title="行业新闻">行业新闻</a> <a href="#article2" data-toggle="tab" class="active-qh pull-left" title="行业新闻">行业新闻</a> </small></h3>
                <div class="tab-content">
                    <ul class="list-unstyled clearfix tab-pane active" id="article1">

                    </ul>
                    <ul class="list-unstyled clearfix tab-pane" id="article2">

                    </ul>
                </div>
                <p><a href="/a/xinwenzixun/xingyexinwen/" >查看更多 MORE &rarr;</a></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-13" style="float:right">
                <h3>媒体报道  Article<small class="pull-right"><a href="/xinwenzixun/meitibaodao/" title="媒体报道"> 更多</a></small></h3>
                <div class="tab-content">
                    <ul class="list-unstyled clearfix tab-pane active" id="links1">

                    </ul>
                </div>
                <p><a href="/a/xinwenzixun/meitibaodao/" >查看更多 MORE &rarr;</a></p>
            </div>
        </div>
    </article>
</div>
<!-- news end -->

<!-- kj-contact start -->
<div class="kj-contact text-center hidden-xs">
    <h4 class="h4"><a href="#" target="_blank">现在致电 138-8686-1003  OR  查看更多联系方式  →</a> </h4>
</div>
<!-- kj-contact end -->

<!-- footer start -->