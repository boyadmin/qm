<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = '网站登录';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <LINK rel="Bookmark" href="/favicon.ico">
    <LINK rel="Shortcut Icon" href="/favicon.ico"/>
    <title>系统管理</title>

    <link href="../css/H-ui.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
</head>
<body>
<div class=" comtent">
    <div class="container">

        <div id="login">

            <div class="row">

                <div class=" col-md-6  col-lg-6"></div>
                <div class="col-md-6 col-lg-6">


                    <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
                    <div class="form-groupl">
                        <?= $form
                            ->field($model, 'username', $fieldOptions1)
                            ->label(false)
                            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

                        <?= $form
                            ->field($model, 'password', $fieldOptions2)
                            ->label(false)
                            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

                        <div class="row">

                            <div class="col-xs-8">
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="form-groupr">
                        <?= Html::submitButton(Yii::t('app', 'Sign in'), ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                    </div>
                    <!-- /.col -->
                </div>


                <?php ActiveForm::end(); ?>


                <!-- /.social-auth-links -->
            </div>
            <div class="col-md-6 col-lg-2 "></div>


        </div>
    </div>
</div>
</html>
