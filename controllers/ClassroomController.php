<?php

namespace app\controllers;
use app\models\Classroom;



class ClassroomController extends \yii\web\Controller
{
    public function actionActivate()
    {
        $classroom = Classroom::find()->where(['id' => 1])->one();

        if($classroom->activation==0){
            $classroom->activation=1;
            $classroom->save();
        }
        echo 'Classroom is activate';
    }

    public function actionDeactivate()
    {
        $classroom = Classroom::find()->where(['id' => 1])->one();

        if($classroom->activation==1){
            $classroom->activation=0;
            $classroom->save();
        }
        echo 'Classroom is deactivate';
    }

}
