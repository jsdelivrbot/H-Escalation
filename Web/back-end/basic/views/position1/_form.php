<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Position1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="position1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pos_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pos_des')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
