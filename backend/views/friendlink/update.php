<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Friendlink */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Friendlink',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Friendlinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-default">
    <div class="panel-header"> <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="friendlink-update">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
    </div></div>