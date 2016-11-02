<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lookup */

$this->title = Yii::t('app', 'Create Lookup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lookups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-default">
    <div class="panel-header">  <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="lookup-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div></div>