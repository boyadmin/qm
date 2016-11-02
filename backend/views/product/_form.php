<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kucha\ueditor\UEditor;
use common\widgets\file_upload\FileUpload;
use common\models\Category;
/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">


    <?php $form = ActiveForm::begin([
    'id' => 'form-article-add',
    'options' => ['class' => 'form form-horizontal'],
    'fieldConfig' => [
    'template' => "{label} \n
    <div class=\"formControls col-md-11 \">{input} {error} </div> ",
'labelOptions' => ['class' => 'form-label col-md-1  text-right'],    // label 的样式定义
],
]); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'pic')->textInput()->widget(FileUpload::className() ,[ ]) ?>


    <?= $form->field($model, 'content')->textarea(['rows' => 6])->widget(UEditor::className(),[]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'cid')->textInput()->dropDownList(Category::getDropDownlistpro()) ?>


    <?= $form->field($model, 'hits')->textInput() ?>

    <?= $form->field($model, 'status')->radioList(\common\models\Lookup::items('status')) ?>


    <div class="form-group">
        <div class="form-label col-md-1 text-right" for="system-keyword"></div>
        <div class="formControls col-md-11">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-success btn-lg btn-block']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>

</div>
