<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Lookup */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Lookup',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lookups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-default">
    <div class="panel-header"> <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="lookup-update">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
    </div></div>