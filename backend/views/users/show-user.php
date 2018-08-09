<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\ApiHelper;

?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'page') ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>


<?php
$result  = ApiHelper::getURLdata();
include  'show-user-confirm.php';
?>