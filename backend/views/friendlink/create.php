<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Friendlink */

$this->title = Yii::t('app', 'Create Friendlink');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Friendlinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?><div class="panel panel-default">
    <div class="panel-header">   <?=  Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="friendlink-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div></div>
