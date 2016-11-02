<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/12 0012
 * Time: 上午 10:03
 */
namespace   backend\components;
use  Yii;
use yii\rbac\Rule;

class  UserRule extends  Rule
{
    public  function  execute($user, $item, $params)
    {
     if(Yii::$app->controller->action->id !== 'update'  || Yii::$app->user->id==$params['id'] )
     {
         return true;
     }
     return false;
        // TODO: Implement execute() method.
    }


}