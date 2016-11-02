<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">
    <div class="neirong">
        <div class="container">
            <div class="col-md-3">
                <ul class="list-group">
                    <?php
                    Category::makelist($ree=Category::tree( null,2));
                    ?>

                </ul>

            </div>
            <div class="col-md-9">

                <h1>right</h1>

            </div>
        </div>

    </div></div>
