<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Friendlink */

$this->title = Yii::t('app', 'Create Friendlink');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Friendlinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="friendlink-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
