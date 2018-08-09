<?php
use yii\helpers\Html;
?>
<h3>Your results:</h3>

<ul>
    <li><label>Page</label>: <?= Html::encode($result->page) ?></li>
    <li><label>Total pages</label>: <?= Html::encode($result->total_pages) ?></li>
    <li><label>Records per page</label>: <?= Html::encode($result->per_page) ?></li>
    <li><label>First record on page</label>:</li>
    <ul>
        <li><label>ID</label>: <?= Html::encode($result->data[0]->id) ?></li>
        <li><label>First name</label>: <?= Html::encode($result->data[0]->first_name) ?></li>
        <li><label>Last name</label>: <?= Html::encode($result->data[0]->last_name) ?></li>
        <li><label>Avatar</label>: </li><br/><?= Html::img($result->data[0]->avatar, ['alt' => 'Avatar img']) ?>
    </ul>

</ul>