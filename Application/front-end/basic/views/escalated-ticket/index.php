<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel app\models\EscalatedTicketSearch */
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
            'esc_date_received',
            'esc_time_receive',
            'esc_reason',
            'esc_owner',
            'esc_status',
            'esc_priority',
            // 'esc_time_closed',
            // 'esc_date_closed',
            // 'ticket_id',
            // 'esc_level',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
