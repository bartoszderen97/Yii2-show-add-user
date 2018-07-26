<?php

namespace backend\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $page;

    public function rules()
    {
        return [
            [['page'], 'required'],
            [['page'], 'integer', 'max' => 4, 'min' => 1],
        ];
    }
}