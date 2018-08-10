<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\ApiHelper;
$this->title = 'Show User Form';
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'page') ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end();
echo $this->render('show-user-confirm', ['result' => $result]);
?>