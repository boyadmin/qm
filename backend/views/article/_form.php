<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Lookup;
use kucha\ueditor\UEditor;
use kartik\file\FileInput;
use  kartik\datetime\DateTimePicker;
use common\widgets\file_upload\FileUpload;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">


    <?php $form = ActiveForm::begin([
        'id' => 'form-article-add',
        'options' => ['class' => 'form form-horizontal'],
        'fieldConfig' => [
            'template' => "{label} \n
    <div class=\"formControls col-md-11 \">{input} {error}
</div> ",
            'labelOptions' => ['class' => 'form-label col-md-1 text-right'],    // label 的样式定义
        ],
    ]); ?>



    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => '请输入标题']) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6])->widget(UEditor::className(), []) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true, 'placeholder' => '请输入关键词']) ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => true])->widget(FileUpload::className(), []) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true, 'placeholder' => '请输入网站描述']) ?>

    <?= $form->field($model, 'cid')->textInput()->dropDownList(Category::getDropDownlistnew()) ?>


    <?= $form->field($model, 'hits')->textInput(['placeholder' => '默认不用修改，这里的数值越大排名越靠前']) ?>

    <?= $form->field($model, 'status')->textInput()->radioList(Lookup::items('status')) ?>


    <div class="form-group">
        <div class="form-label col-md-1 text-right" for="system-keyword"></div>
        <div class="formControls col-md-11">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-success btn-lg btn-block']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
