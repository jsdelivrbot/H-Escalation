<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EscalationTicketHistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escalation-ticket-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hist_status') ?>

    <?= $form->field($model, 'hist_reason') ?>

    <?= $form->field($model, 'hist_timestamp') ?>

    <?= $form->field($model, 'escalated_ticket_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
