<?php

use yii\helpers\Html;
use yii\grid\GridView;
use  common\models\Category;
use common\models\Lookup;


/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-default">
    <div class="panel-header">  <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">
        <div class="category-index">


            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    //   ['class' => 'yii\grid\SerialColumn'],


                  ['attribute'=>'id',
                  'contentOptions'=>['style'=>'width: 20px;text-align: center'],
                    ],
//                    'username',
                    'title',
//                    'pid',


                    'pid' => [
                        //  'label' => '栏目',
                        'attribute' => 'pid',  //排序
                        'filter' => Html::activeTextInput($searchModel, 'pid', ['class' => 'form-control']),   //搜索框
                        'value' => function ($model, $key, $index, $channelid) {
                            //Category::item 1 新闻模型 2为产品模型
                            if (Category::item(1, $model->pid)) {
                                return Html::a(Category::item(1, $model->pid), ['category/view', 'id' => $model->pid]);
                            }elseif (Category::item(2, $model->pid)) {
                                return Html::a(Category::item(2, $model->pid), ['category/view', 'id' => $model->pid]);
                            }
                            return '不存在';
                        }, 'format' => 'raw',
                    ],
               //     'sort',
                    // 'pic',
               //     'slug',
                //    'type',
                    'type' => [
                        'attribute' => 'type',  //排序
                        'contentOptions'=>['style'=>'width: 20px;text-align: center'],
                        'filter' => Html::activeTextInput($searchModel, 'type', ['class' => 'form-control']),   //搜索框
                        'value' =>
                            function ($model, $key, $index, $channelid) {
                                return Lookup::item('model', $model->type);
                            },
                        ],


                        // 'keyword',
                        // 'description',

                        'status' => [
                            'attribute' => 'status',  //排序
                            'contentOptions'=>['style'=>'width: 20px;text-align: center'],
                            'filter' => Html::activeTextInput($searchModel, 'status', ['class' => 'form-control']),   //搜索框
                            'value' =>
                                function ($model, $key, $index, $channelid) {
                                    return Lookup::item('status', $model->status);
                                },
                        ],
                        // 'created_at',
                        // 'updated_at',
                        [

                          //  'label' => '所属分类',
                            'class' => 'backend\widgets\grid\ActionColumn',
                            'template' => '{create} {update} {delete}'
                        ],
//            ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
        </div>
    </div>
</div>