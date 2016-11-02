<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = Yii::t('app', 'Create Page');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?><div class="panel panel-default">
    <div class="panel-header">   <?=  Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="Page-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div></div>
