<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\ApiHelper;
$this->title = 'Show User Form';
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'page') ?>
<?= $form->setId('ShowUserForm') ?>

    <div class="form-group" name="SubmitPageButton">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end();

echo $this->render('show-user-confirm', ['result' => $result]);
?>