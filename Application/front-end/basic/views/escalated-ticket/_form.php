<!DOCTYPE html>
<html>
<body>


<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\CHtml;
/* @var $this yii\web\View */
/* @var $model app\models\EscalatedTicket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escalated-ticket-form">
<center>
</br>
</br>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'esc_date_received')->textInput() ?>

    <?= $form->field($model, 'esc_time_receive')->textInput() ?>

    <?= $form->field($model, 'esc_reason')->textInput(['maxlength' => true]) ?>

    <?Php echo "Esc_Owner" ?> <p>         </p>
    <?php echo Html::dropDownList('esc_owner', $model, 
              array('1' => 'SUPERVISOR', '2' => 'DEPARTMENT MANAGER', '3' => 'RESIDENT MANAGER', '4' => 'GENERAL MANAGER')); ?>
              </br> </br>


    <?Php echo "Esc_Priority" ?> <p>         </p>
    <?php echo Html::dropDownList('esc_priority', $model, 
              array('1' => '-- Select Priority --', '2' => 'LOW', '3' => 'MEDIUM', '4' => 'HIGH', '5' => 'URGENT')); ?>
              </br> </br>

    <?= $form->field($model, 'esc_time_closed')->textInput() ?>

    <?= $form->field($model, 'esc_date_closed')->textInput() ?>

    <?= $form->field($model, 'ticket_id')->textInput() ?>
    
    <?Php echo "Esc_Level" ?> <p>         </p>
    <?php echo Html::dropDownList('esc_level', $model, 
              array('1' => '1: SUPERVISOR', '2' => '2: DEPARTMENT MANAGER', '3' => '3: RESIDENT MANAGER', '4' => '4: GENERAL MANAGER')); ?>


    <div class="form-group">
    </br>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</center>
</div>

</body>
</html>