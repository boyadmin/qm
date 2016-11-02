<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\System */

$this->title = Yii::t('app', 'Systems') ;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Systems'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="panel panel-default">
    <div class="panel-header">  <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">

<div class="system-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
        </div>
</div>