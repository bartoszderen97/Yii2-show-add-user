<?php
namespace frontend\tests\unit\models;

use Yii;
use frontend\models\AddUserForm;

class AddUserFormTest extends \Codeception\Test\Unit
{
    public function testValidatePageIncorrect()
    {
        $model = new AddUserForm();

        $model->attributes = [
            'name' => null,
            'job' => null,
        ];
        expect_that($model->validate() === false);
    }

    public function testValidatePageCorrect()
    {
        $model = new AddUserForm();

        $model->attributes = [
            'name' => 'Leo Messi',
            'job' => 'football player',
        ];
        expect_that($model->validate() === true);

    }
}