<?php

use yii\helpers\Html;

/* @var $model app\models\Article */
?>

<div>
    <h3><?php echo Html::encode($model->title) ?></h3>
    <div>
        <?php echo Html::encode($model->body) ?>
    </div>
    <hr>
</div>