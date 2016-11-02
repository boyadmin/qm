<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Lookup;
use  kucha\ueditor\UEditor;
use  common\widgets\file_upload\FileUpload;
/* @var $this yii\web\View */
/* @var $model common\models\page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">


    <?php $form = ActiveForm::begin([
    'id' => 'form-article-add',
    'options' => ['class' => 'form form-horizontal'],
    'fieldConfig' => [
    'template' => "{label} \n
    <div class=\"formControls col-md-11  \">{input} {error}
</div> ",
'labelOptions' => ['class' => 'form-label col-md-1  text-right'],    // label 的样式定义
],
]); ?>



    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'placeholder'=>'请输入标题']) ?>

    <?= $form->field($model, 'content')->textarea(['rows' =>3])->widget(UEditor::className(),[]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true,'placeholder'=>'网站关键词']) ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => true])->widget(FileUpload::className(),[]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true,'placeholder'=>'网站描述 ']) ?>


    <?= $form->field($model, 'status')->radioList(Lookup::items('status')) ?>



    <div class="form-group">
        <div class="form-label col-md-1 text-right" for="system-keyword"></div>
        <div class="formControls col-md-11">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-success btn-lg btn-block']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>

</div>
