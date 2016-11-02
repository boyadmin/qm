<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Articles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neirong"> <h1 class="h-h2" style="text-align: center;">
        <span style="font-size: 18px;"><?= $this->title ?> </h1>
    <article class="container info">

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '    {items}  <div class="clear"></div>{summary}  {pager} ',
//        'itemTemplate'=>'{link}/',
//        'activeItemTemplate'=>'{link}',

        'options' => ['class' => 'items','tag'=>'ul','id'=>'art1'],
        'itemOptions' => ['class' => 'item','tag'=>'li'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);
        },
    ]) ?>
        </article>
</div>
