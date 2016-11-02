<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-default">
    <div class="panel-header">  <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">
        <div class="product-index">


            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
                    ['attribute' => 'id',
                        //   'filter' => Html::activeTextInput($searchModel, 'pid', ['class' => 'form-control']),
                        'contentOptions' => ['style' => 'width: 20px;text-align: center'],],
                    'username',
                    'title',
                    'content:ntext',
                    'keyword',
                    // 'pic',
                    // 'description',

                    'cid' => [
                        //  'label' => '栏目',
                        'attribute' => 'cid',  //排序
                        'filter' => Html::activeTextInput($searchModel, 'cid', ['class' => 'form-control']),   //搜索框
                        'value' => function ($model, $key, $index, $channelid) {
                            //Category::item 1 新闻模型 2为产品模型
                            return Html::a(Category::item(2, $model->cid), ['category/view', 'id' => $model->cid]);

                        }, 'format' => 'raw',
                    ],
                    // 'hits',
                    // 'status',
                    // 'created_at',
                    // 'updated_at',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>