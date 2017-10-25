<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EscalatedTicketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escalated-ticket-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'ticket_id') ?>

    <?= $form->field($model, 'esc_received') ?>

    <?= $form->field($model, 'esc_closed') ?>

    <?php // echo $form->field($model, 'esc_limit') ?>

    <?php // echo $form->field($model, 'esc_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
