<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ShowUserForm;

class ShowUserController extends \yii\web\Controller
{
    public function actionShowUser()
    {
        $model = new ShowUserForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('show-user', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('show-user', ['model' => $model]);
        }
    }
}
