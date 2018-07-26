<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'page') ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<?php
if(!empty($model->page))
$content =     file_get_contents("http://reqres.in/api/users?page=".$model->page);
else{
    $model->page=1;
    $content =     file_get_contents("http://reqres.in/api/users?page=".$model->page);
}

$result  = json_decode($content);
echo " Page: $model->page </br> ";
echo " Total pages: $result->total_pages </br> ";
echo " Records per page: $result->per_page </br> ";
echo " First record on page: </br> ";
echo " - ID: ";
echo $result->data[0]->id;
echo "</br>";
echo " - First name: ";
echo $result->data[0]->first_name;
echo "</br>";
echo " - Last name: ";
echo $result->data[0]->last_name;
echo "</br>";
echo " - Avatar: </br><img src=".$result->data[0]->avatar.">";

//print_r( $result->data);
?>