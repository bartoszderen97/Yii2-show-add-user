<?php

namespace frontend\controllers;

use Yii;
use frontend\models\AddUserForm;
use frontend\models\ShowUserForm;
use common\components\ApiHelper;

class UsersController extends \yii\web\Controller
{
    public function actionShowUser()
    {
        $model = new ShowUserForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            ApiHelper::getURLcontent($model);
            return $this->render('show-user', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error

            ApiHelper::getURLcontent($model);
            return $this->render('show-user', ['model' => $model]);
        }
    }

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
