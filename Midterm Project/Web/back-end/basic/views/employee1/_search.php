<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'emp_num') ?>

    <?= $form->field($model, 'emp_fname') ?>

    <?= $form->field($model, 'emp_mname') ?>

    <?= $form->field($model, 'emp_lname') ?>

    <?php // echo $form->field($model, 'emp_contact_no') ?>

    <?php // echo $form->field($model, 'dept_id') ?>

    <?php // echo $form->field($model, 'pos_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
