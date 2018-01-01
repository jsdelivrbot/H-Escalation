<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TicketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tick_type') ?>

    <?= $form->field($model, 'tick_details') ?>

    <?= $form->field($model, 'tick_status') ?>

    <?= $form->field($model, 'tick_priority') ?>

    <?php // echo $form->field($model, 'tick_date') ?>

    <?php // echo $form->field($model, 'tick_limit') ?>

    <?php // echo $form->field($model, 'tick_closed_time') ?>

    <?php // echo $form->field($model, 'tick_escalate') ?>

    <?php // echo $form->field($model, 'employee1_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
