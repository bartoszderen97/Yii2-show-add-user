<?php

function getURLcontent($model){

    if(!empty($model->page))
        $content = file_get_contents("http://reqres.in/api/users?page=".$model->page);
    else{
        $model->page=1;
        $content = file_get_contents("http://reqres.in/api/users?page=".$model->page);
    }
    return $content;
}


?>
