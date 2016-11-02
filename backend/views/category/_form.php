<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  common\models\Lookup;
use  common\models\Category;



/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">


    <?php $form = ActiveForm::begin([
    'id' => 'form-article-add',
    'options' => ['class' => 'form form-horizontal'],
    'fieldConfig' => [
    'template' => "{label} \n
    <div class=\"formControls col-md-11 \">{input} {error} </div> ",
'labelOptions' => ['class' => 'form-label col-md-1 text-right'],    // label 的样式定义
],
]); ?>



    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php  // $form->field($model, 'pid')->textInput() ?>
    <?= $form->field($model, 'pid')->dropDownList(Category::getDropDownlist(),['prompt' =>'请选择']) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true])->dropDownList(Lookup::items('model')) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->radioList(Lookup::items('zt')) ?>




<div class="form-group">
    <div class="form-label col-md-1 text-right" for="system-keyword"></div>
    <div class="formControls col-md-11">
        <?=  Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-success btn-lg btn-block']) ?>
    </div>
</div>




<?php ActiveForm::end(); ?>

</div>
