<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

 AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="/skin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/skin/css/style.css" rel="stylesheet">
    <link href="/skin/css/shake.css" rel="stylesheet">

</head>
<body>

<header data-headroom id="header" class="navbar navbar-default navbar-fixed-top" role="navigation">

    <div class="container">
        <!-- mobile nav start -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!-- logo start -->
            <h1 class="logo"><a class="navbar-brand" href="/"><img src="/skin/images/logo.png" alt=" 随州启明网络" title=" 随州启明网络" class="ylw-img-responsive logo-hidden" /><img src="/skin/images/blogo.png" alt=" 随州启明网络" title=" 随州启明网络" class="ylw-img-responsive logo-visible" /></a><small class="pull-left"><a href="/" class="visible-lg"></a></small></h1>
            <ul class="list-unstyled head-lx">
                 
             <!--   <li> <br />
                    <small> </small></li>  -->
                <li class="tel">全国服务： 138-8686-1003</li>
                <li class="oc">在线咨询：<a href="http://wpa.qq.com/msgrd?v=3&uin=284660546&site=qq&menu=yes
" target="_blank"><img src="/skin/images/head-sq.png" alt="在线咨询"></a> <a href="http://wpa.qq.com/msgrd?v=3&uin=284660546&site=qq&menu=yes" target="_blank"><img src="/skin/images/head-qq.png" alt="QQ咨询"></a></li>
            </ul>
        </div>

        <nav class="collapse navbar-right navbar-collapse" role="navigation">
        <ul class="nav navbar-nav" id="nav">


        <!-- mobile nav end -->

        <?php

        $menuItems = [
            ['label' => Yii::t('app', '网站首页').' <small>Home</small>' , 'url' => ['/site/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '服务业务').' <small>Service</small>', 'url' => ['/article/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '产品中心').' <small>Product</small>', 'url' => ['/category/pro'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '新闻中心').' <small>News</small>', 'url' => ['/category/new'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],

            ['label' => Yii::t('app', '合作保障').' <small>Cooperate</small>', 'url' => ['/product/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '关于我们').' <small>About</small>', 'url' => ['page/view','id'=>1], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '联系我们').' <small>Contact</small>', 'url' => ['page/view','id'=>2], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
            ['label' => Yii::t('app', '联系我们').' <small>Home</small>', 'url' => '/a/chenggonganli/list_11_1.html', 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],

        ];
        echo Nav::widget([
            'options' => ['class' => 'nav navbar-nav','id'=>'nav'],
            'items' => $menuItems,
            'encodeLabels' => false,
          //  'options' => ['class' => 'nav navbar-nav'],
            //  'items' => $rightMenuItems,
        ]);
      //  NavBar::end();
        ?>
</nav>
        <?php
//        NavBar::begin([
//
//            'brandLabel' => 'My Company',
//            'brandUrl' => Yii::$app->homeUrl,
//            'options' => [
////                'class' => 'navbar-inverse navbar-fixed-top  ',
//                'class' => 'collapse navbar-right navbar-collapse',
//
//            ],
//
//        ]);
////        $brandLabel = false;
//
//        $menuItems = [
//
//            [ 'label' => 'Home'.' ', 'url' => ['/site/index'], 'options'=>['class'=>'dropdown'], 'linkOptions' => ['class'=>'dropdown-toggle'],],
//            ['label' => 'About', 'url' => ['/site/about'], 'options'=>['class'=>'dropdown'],'linkOptions' => ['class'=>'dropdown-toggle'],],
//            ['label' => 'Contact', 'url' => ['/site/contact'], 'options'=>['class'=>'dropdown'],'linkOptions' => ['class'=>'dropdown-toggle'],],
//
//        ];
//
//
//
//        if (Yii::$app->user->isGuest) {
//            $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//        } else {
//            $menuItems[] = '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link']
//                )
//                . Html::endForm()
//                . '</li>';
//        }
//        echo Nav::widget([
//            'options' => ['class' => 'navbar-nav navbar-right'],
//            'items' => $menuItems,
//
//
//        ]);
//        NavBar::end();


        ?>



</header>

<!-- head end -->
<!-- banner start -->
<div class="banner text-center">
    <div class="slider">
        <ul class="slides">
            <li class="slide">
                <div class="box" style="background-image:url(/skin/img/q1.jpg)  "><a><img
                            src="/skin/img/q1.jpg" class="ylw-img-responsive" alt=""
                            title=""/></a></div>
            </li>
            <li class="slide">
                <div class="box" style="background-image:url(/skin/img/q2.jpg)"><a><img
                            src="/skin/img/q2.jpg" class="ylw-img-responsive" alt=""
                            title=""/></a></div>
            </li>
            <li class="slide">
                <div class="box" style="background-image:url(/skin/img/q3.jpg)"><a><img
                            src="/skin/img/q3.jpg" class="ylw-img-responsive" alt=""
                            title=""/></a></div>
            </li>
            <li class="slide">
                <div class="box" style="background-image:url(/skin/img/q4.jpg)"><a><img
                            src="/skin/img/q4.jpg" class="ylw-img-responsive" alt=""
                            title=""/></a></div>
            </li>
        </ul>
    </div>
</div>
<!-- banner end -->

<?php $this->beginBody() ?>




<div class="crumbs">
    <div class="container">

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
    </div></div>
<?= Alert::widget() ?>
<?= $content ?>


<div class="footer" id="yy">
    <footer class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <h3>手机浏览 Mobile browser</h3>
                <p style="text-align: center">  <img src="/skin/images/weixin.jpg"
                     alt="" title=""
                     class="ylw-img-responsive"/><br>
               微信扫一扫</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-6 z15">
                <h3>联系我们 Contact US</h3>
                <address class="address">
                    <ul class="list-unstyled">
                        <li>中国 · 湖北 · 随州</li>
                        <li> 0722-380**** </li>
                        <li>  138-8686-1003</li>
                        <li>ncplum@qq.com</li>
                        <li class="sns"><a href="#" title="官方微博" target="_blank"><img src="/skin/images/weibo.png"
                                                                                      width="18" height="18"
                                                                                      alt="微博"></a> <a href="#"
                                                                                                       target="_blank"><img
                                    src="/skin/images/shangqiao.png" width="18" height="18" alt="商桥在线咨询"></a> <a
                                href="http://wpa.qq.com/msgrd?v=3&uin=284660546&site=qq&menu=yes" target="_blank"><img
                                    src="/skin/images/qq.png" width="18" height="18" alt="QQ在线咨询"></a> <a
                                href="#" class="bdsharebuttonbox" rel="nofollow"><img
                                    src="/skin/images/fenxiang.png" width="18" height="18" alt="联系我们" class="bds_more"
                                    data-cmd="more"></a>
                    </ul>
                </address>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <h3>快捷入口 Quick Entry</h3>
                <div class="row cidaohang">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
                        <ul class="list-unstyled">


                        </ul>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
                        <ul class="list-unstyled">

                            <li>关于我们</li>

                            <li>服务项目</li>

                            <li>营销策划</li>

                            <li>成功案例</li>

                            <li>联系我们</li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- yuyue end -->
        <!-- copy start -->
        <div class="copy">
            <hr/>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                    <p class="banquan"></p>
                    <p class="renzheng"><img src="/skin/images/2014062961592429.png" width="32" height="36"
                                             alt="工商合法注册企业" title="工商合法注册企业"/> <img
                            src="/skin/images/2014062961988229.png" width="32" height="36" alt="安全网站" title="安全网站"/>
                        <img src="/skin/images/2014062962024649.png" width="32" height="36" alt="网上报警" title="网上报警"/>
                          </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-right hidden-xs">
                    <div class="qixia">
                        <p>旗下品牌</p>
                        <p class="qx"> <a href='http://www.zytzqc.cn' target='_blank'>专用特种汽车</a> . </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- copy end -->
        <!-- link start -->
        <div class="yq-link visible-lg friendlink">
            <p>

                <strong>友情链接：</strong>
                <?php
                    $links= \common\models\Friendlink::find()->where(['status'=>1])->asArray()->all();
                foreach ($links as $link)
                {
                 echo  Html::a($link['title'],$link['url']);
                }
//                    echo "<pre>";
//                print_r($links);
//                    echo "<pre>";
                ?>
                <small>友链申请QQ：284660546</small>
            </p>
        </div>
        <!-- link end -->
    </footer>
</div>
<!-- footer end -->
<!-- go to top start -->
<div class="go-top text-center" id="di"><a href="#top" rel="nofollow">Go To Top 回顶部</a></div>
<!-- go to top end -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/skin/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/skin/js/bootstrap.min.js"></script>
<!-- header up start -->
<script src="/skin/js/headroom.min.js"></script>
<script src="/skin/js/jquery.headroom.js"></script>
<script>$("#header").headroom();</script>
<!-- header up end -->
<!-- banner start -->
<script src="/skin/js/jquery.glide.min.js"></script>
<script src="/skin/js/jquery.glide.admin.js"></script>
<!-- banner end -->
<!-- Team left start -->
<script src="/skin/js/jpuery.team.scroll.js"></script>
<!-- Team left end -->
<!-- kefu start -->
<div class="kefu hidden-xs">
    <div><a href="#" class="kefu-lx" title="联系我们" target="_blank">联系我们</a></div>
    <ul class="list-unstyled">
        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=494921416&site=qq&menu=yes" target="_blank" class="kf"
               rel="nofollow">在线客服</a></li>
        <li><a href="#yy" class="kefu-yy" title="快速预约设计" rel="nofollow">快速预约</a></li>
        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=284660546&site=qq&menu=yes" title="网页在线咨询" target="_blank"
               class="kefu-zx" rel="nofollow">在线咨询</a></li>
        <li><a href="#top" class="kefu-top" title="回网页顶部" rel="nofollow"></a></li>
        <li><a href="#di" class="kefu-di" title="回网页底部" rel="nofollow"></a></li>
    </ul>
</div>


<!-- kefu end -->
<!-- footer end -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
