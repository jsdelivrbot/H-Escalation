<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EscalatedTicketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escalated-ticket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'esc_date_received') ?>

    <?= $form->field($model, 'esc_time_receive') ?>

    <?= $form->field($model, 'esc_reason') ?>

    <?= $form->field($model, 'esc_owner') ?>

    <?php // echo $form->field($model, 'esc_status') ?>

    <?php // echo $form->field($model, 'esc_priority') ?>

    <?php // echo $form->field($model, 'esc_time_closed') ?>

    <?php // echo $form->field($model, 'esc_date_closed') ?>

    <?php // echo $form->field($model, 'ticket_id') ?>

    <?php // echo $form->field($model, 'esc_level') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
