<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Anceta;

class AncetaController extends Controller
{
    public function actionAnceta()
    {
        $model = new Anceta();

        if ($model->load(Yii::$app->request->post())){
            if($model->save())
            {
                return $this->refresh();
            }
           
        }
        return $this->render('anceta',compact('model'));

    }

}
