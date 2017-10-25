<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EscalatedTicket */

$this->title = 'Create Escalated Ticket';
$this->params['breadcrumbs'][] = ['label' => 'Escalated Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escalated-ticket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
