<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tick_request')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tick_priority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tick_others')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tick_timelimit')->textInput() ?>

    <?= $form->field($model, 'tick_startDate')->textInput() ?>

    <?= $form->field($model, 'tick_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tick_closed_date')->textInput() ?>

    <?= $form->field($model, 'room_room_no')->textInput() ?>

    <?= $form->field($model, 'ticket_type_id')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'assigned_to')->textInput() ?>

    <?= $form->field($model, 'closed_by')->textInput() ?>

    <?= $form->field($model, 'tick_item')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
