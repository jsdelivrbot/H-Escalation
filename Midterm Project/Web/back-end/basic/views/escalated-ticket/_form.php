<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EscalatedTicket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escalated-ticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'esc_date_received')->textInput() ?>

    <?= $form->field($model, 'esc_time_receive')->textInput() ?>

    <?= $form->field($model, 'esc_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esc_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esc_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esc_priority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esc_time_closed')->textInput() ?>

    <?= $form->field($model, 'esc_date_closed')->textInput() ?>

    <?= $form->field($model, 'ticket_id')->textInput() ?>

    <?= $form->field($model, 'esc_level')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
