<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EscalationTicketHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escalation-ticket-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'hist_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hist_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hist_timestamp')->textInput() ?>

    <?= $form->field($model, 'escalated_ticket_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
