<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;


class ApiController extends ActiveController
{
    // указываем класс модели, который будет использоваться
    public $modelClass = 'app\models\PersonsModel';
    public function behaviors()
      {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className()
        ];
        return $behaviors;
      }
    
}
