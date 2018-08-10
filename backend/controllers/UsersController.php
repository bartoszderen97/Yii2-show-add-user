<?php

namespace backend\controllers;

use Yii;
use backend\models\AddUserForm;
use backend\models\ShowUserForm;
use common\components\ApiHelper;

class UsersController extends \yii\web\Controller
{
    public function actionShowUser()
    {
        $model = new ShowUserForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            $result = ApiHelper::getURLcontent($model);
            if(!empty($result)) {
                return $this->render('show-user', ['model' => $model, 'result' => $result]);
            }
        } else {
            // either the page is initially displayed or there is some validation error

            $result = ApiHelper::getURLcontent($model);
            if(!empty($result)) {
                return $this->render('show-user', ['model' => $model, 'result' => $result]);
            }
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
