<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EscalationTicketHistory */

$this->title = 'Create Escalation Ticket History';
$this->params['breadcrumbs'][] = ['label' => 'Escalation Ticket Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escalation-ticket-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
