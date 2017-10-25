<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_num')->textInput() ?>

    <?= $form->field($model, 'emp_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_contact_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'pos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
