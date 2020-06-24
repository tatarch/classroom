<?php

namespace app\controllers;

use app\models\Classroom;
use Yii;
use yii\rest\ActiveController;
use yii\web\BadRequestHttpException;

class ClassroomController extends ActiveController
{
    public $modelClass = 'app\models\Classroom';

    public function actionActivate()
    {
        $id = Yii::$app->request->get('id');
        $classroom = Classroom::find()->where(['id' => $id])->one();
        if (!$classroom) {
            throw new BadRequestHttpException('not found');
        }
        if ($classroom->activation == 0) {
            $classroom->activation = 1;
        } else {
            $classroom->activation = 0;
        }
        $classroom->save();
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $classroom;
    }
}
