<?php
use yii\helpers\Html;
?>
<p>You have added the following user:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Job</label>: <?= Html::encode($model->job) ?></li>
</ul>