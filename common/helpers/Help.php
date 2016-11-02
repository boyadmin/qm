<?php
use  common\helpers\Html;


/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/4/1
 * Time: 下午6:28
 */
function dd($id)
{
    echo "<div style='border: solid 1px #red;padding: 5px; background:#dedede '>";
    var_dump($id);
    echo '</div>';
    die();

}
function dr($id)
{
    echo "<div style='border: solid 1px #red;padding: 5px; background:#dedede '><pre>";
    print_r($id);
    echo '</pre> </div>';
    die();

}
//显示分类列表
function lia($item)
{



   echo '<li class="list-group-item">' . html::a($item->title . '--' . $item->pid, [Yii::$app->controller->id . "/view", 'id' => $item->id]) . '</li>';

}