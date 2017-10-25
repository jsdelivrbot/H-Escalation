<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EscalatedTicket */

$this->title = 'Update Escalated Ticket: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Escalated Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'user_id' => $model->user_id, 'ticket_id' => $model->ticket_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="escalated-ticket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
