<?php

namespace  common\components;

use Yii;
use yii\caching\MemCache;

class ApiHelper
{
    public static function getURLcontent($model){

        if(empty($model->page))
            $model->page=1;

        $urlAdress = "http://reqres.in/api/users?page=".$model->page;
        $cache = Yii::$app->cache;
        $key   = $urlAdress;
        $data  = $cache->get($key);
        if ($data === false) {
            $data = file_get_contents($urlAdress);
            $cache->set($key, $data, 60);
        }
        return $data;
    }
}
