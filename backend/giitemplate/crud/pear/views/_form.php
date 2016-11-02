<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">


    <?= "<?php " ?>$form = ActiveForm::begin([
    'id' => 'form-article-add',
    'options' => ['class' => 'form form-horizontal'],
    'fieldConfig' => [
    'template' => "{label} \n
    <div class=\"formControls col-md-11 \">{input} {error} </div> ",
'labelOptions' => ['class' => 'form-label col-md-1 text-right'],    // label 的样式定义
],
]); ?>

<?php foreach ($generator->getColumnNames() as $attribute) {
    if (in_array($attribute, $safeAttributes)) {
        echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
    }
} ?>


<div class="form-group">
    <div class="form-label col-md-1 text-right" for="system-keyword"></div>
    <div class="formControls col-md-11">
        <?= "<?= " ?> Html::submitButton($model->isNewRecord ? <?= $generator->generateString('Create') ?> : <?= $generator->generateString('Update') ?>, ['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-success btn-lg btn-block']) ?>
    </div>
</div>




<?= "<?php " ?>ActiveForm::end(); ?>

</div>
