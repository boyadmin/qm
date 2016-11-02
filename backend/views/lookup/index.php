<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LookupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Lookups');
$this->params['breadcrumbs'][] = $this->title;
?><div class="panel panel-default">
    <div class="panel-header">  <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="lookup-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Lookup'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id',
                'contentOptions'=>['style'=>'width: 20px;text-align: center'],
            ],
            'name',
            'code',
            'type',
            'position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div></div>
