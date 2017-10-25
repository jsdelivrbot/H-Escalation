<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TicketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tickets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ticket', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tick_request',
            'tick_priority',
            'tick_others',
            'tick_timelimit',
            // 'tick_startDate',
            // 'tick_status',
            // 'tick_closed_date',
            // 'room_room_no',
            // 'ticket_type_id',
            // 'created_by',
            // 'assigned_to',
            // 'closed_by',
            // 'tick_item',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
