<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
include 'api\api.php';
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'page') ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>


<?php
$content=getURLcontent($model);
$result  = json_decode($content);
include  'show-user-confirm.php';
?>