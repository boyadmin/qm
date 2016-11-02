<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Page-view">

    <div class="neirong"> <article class="container">
            <div class="text-center">


            <?= $model->content ?>
    <!--
    <?=     DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'title',
            'content:ntext',
            'keyword',
            'pic',
            'description',
            'status',
            'created_at',
            'updated_at',
        ],
    ])
    ?>
  -->
</div>
</div>
</div>
</div>
