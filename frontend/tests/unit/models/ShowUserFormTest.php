<?php
namespace frontend\tests\unit\models;

use Yii;
use frontend\models\ShowUserForm;

class ShowUserFormTest extends \Codeception\Test\Unit
{
    public function testValidatePageIncorrect()
    {
        $model = new ShowUserForm();

        $model->attributes = [
            'page' => 'sratata',
        ];
        expect_that($model->validate() === false);

        $model->attributes = [
            'page' => '-875',
        ];
        expect_that($model->validate() === false);

        $model->attributes = [
            'page' => '143',
        ];
        expect_that($model->validate() === false);

        $model->attributes = [
            'page' => '0',
        ];
        expect_that($model->validate() === false);
    }

    public function testValidatePageCorrect()
    {
        $model = new ShowUserForm();

        $model->attributes = [
            'page' => '3',
        ];

        expect_that($model->validate() === true);

        $model->attributes = [
            'page' => '4',
        ];

        expect_that($model->validate() === true);

        $model->attributes = [
            'page' => '2',
        ];

        expect_that($model->validate() === true);

        $model->attributes = [
            'page' => '1',
        ];

        expect_that($model->validate() === true);
    }
}