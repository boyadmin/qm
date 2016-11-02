<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <div class="neirong">
        <div class="container">
            <div class="col-md-3">
                <ul class="list-group">
                    <?php
                    Category::makelist($ree=Category::tree( null,1));
                    ?>

                </ul>

            </div>
            <div class="col-md-9">

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'username',
                        'title',
                        'pid',
                        'sort',
                        'pic',
                        'type',
                        'keyword',
                        'description',
                        'status',
                        'created_at',
                        'updated_at',
                    ],
                ]) ?>

            </div>
        </div>

    </div>




</div>
