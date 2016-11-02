<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Category;
use common\models\Lookup;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-default">
    <div class="panel-header"> <?=  Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'title',
            'content:raw',
            'keyword',
            'pic',
            'description',

            'cid'=>[ 'attribute'=>'cid','value'=>Category::item(1,$model->cid)],


            'hits',
            'status'=>[ 'attribute'=>'status','value'=>Lookup::item('status',$model->status)],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
    </div>   </div>