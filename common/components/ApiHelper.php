<?php

namespace  common\components;

use Yii;
use yii\caching\MemCache;

class ApiHelper
{
    public static function getURLcontent($model){

        if(empty($model->page))
            $model->page=1;

        $cache = Yii::$app->cache;
        $key   = "http://reqres.in/api/users?page=".$model->page;
        $data  = $cache->get($key);
        if ($data === false) {
            $data = file_get_contents($key);
            $cache->set($key, $data, 60);
        }
        return $data;
    }
}
