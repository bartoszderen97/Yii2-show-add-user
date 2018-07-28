<?php

namespace backend\controllers;

use Yii;
use backend\models\AddUserForm;

class AddUserController extends \yii\web\Controller
{
    public function actionAddUser()
    {
        $model = new AddUserForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('add-user-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('add-user', ['model' => $model]);
        }
    }

}
