<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = Yii::t('app', 'Create Product');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?><div class="panel panel-default">
    <div class="panel-header">   <?=  Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="product-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div></div>
