<?php

use yii\helpers\Html;
use yii\grid\GridView;
use  common\models\Category;
use common\models\Lookup;


/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Articles');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-default">
    <div class="panel-header">  <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">
        <div class="article-index">


            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a(Yii::t('app', 'Create Article'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

                    'id'=>[
                        'attribute' => 'id',  //排序
                        'contentOptions'=>['style'=>'width: 20px;text-align: center'],
                    ],
                    'username',
                    'title',
                    'content:ntext',
                    'keyword',
                    // 'pic',
                    // 'description',
//              'cid',


                    'cid' => [
                        //  'label' => '栏目',
                        'attribute' => 'cid',  //排序
                        'filter' => Html::activeTextInput($searchModel, 'cid', ['class' => 'form-control']),   //搜索框
                        'value' => function ($model, $key, $index, $channelid) {
                            //Category::item 1 新闻模型 2为产品模型
                            if (Category::item(1, $model->cid)) {
                                return Html::a(Category::item(1, $model->cid), ['category/view', 'id' => $model->cid]);
                            }
                            return Html::a('不存在', ['category/view', 'id' => $model->cid]);
                        }, 'format' => 'raw',
                    ],
                    // 'hits',
//                    'status',
                    'status' => [
                        'attribute' => 'status',  //排序
                        'contentOptions'=>['style'=>'width: 20px;text-align: center'],
                        'filter' => Html::activeTextInput($searchModel, 'cid', ['class' => 'form-control']),   //搜索框
                        'value' =>
                            function ($model, $key, $index, $channelid) {
                                //Category::item 1 新闻模型 2为产品模型
                                return Lookup::item('status', $model->status);
                            },
                    ],
                    // 'created_at',
                    // 'updated_at',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>