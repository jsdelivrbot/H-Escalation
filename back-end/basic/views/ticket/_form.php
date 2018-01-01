<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tick_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tick_details')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tick_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tick_priority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tick_date')->textInput() ?>

    <?= $form->field($model, 'tick_limit')->textInput() ?>

    <?= $form->field($model, 'tick_closed_time')->textInput() ?>

    <?= $form->field($model, 'tick_escalate')->textInput() ?>

    <?= $form->field($model, 'employee1_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
