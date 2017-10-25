<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EscalatedTicketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Escalated Tickets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escalated-ticket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Escalated Ticket', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'ticket_id',
            'esc_received',
            'esc_closed',
            // 'esc_limit',
            // 'esc_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
