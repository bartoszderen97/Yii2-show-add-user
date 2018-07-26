<?php

namespace backend\models;

use Yii;
use yii\base\Model;

class AddUserForm extends Model
{
    public $name;
    public $job;

    public function rules()
    {
        return [
            [['name', 'job'], 'required'],
            [['name', 'job'], 'string', 'max' => 20],
        ];
    }
}