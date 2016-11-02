<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('app', 'Create Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?><div class="panel panel-default">
    <div class="panel-header">   <?=  Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="category-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div></div>
