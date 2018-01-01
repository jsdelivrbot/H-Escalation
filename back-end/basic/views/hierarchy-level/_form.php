<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HierarchyLevel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hierarchy-level-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'level_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department1_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
