<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Lookup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lookup-form">


    <?php $form = ActiveForm::begin([
    'id' => 'form-article-add',
    'options' => ['class' => 'form form-horizontal'],
    'fieldConfig' => [
    'template' => "{label} \n
    <div class=\"formControls col-md-11 \">{input} {error} </div> ",
'labelOptions' => ['class' => 'form-label col-md-1  text-right'],    // label 的样式定义
],
]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput() ?>


    <div class="form-group">
        <div class="form-label col-md-1 text-right" for="system-keyword"></div>
        <div class="formControls col-md-11">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-success btn-lg btn-block']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>

</div>
