<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\models\EscalatedTicket */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Escalated Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php
        echo Nav::widget([
        'options' => ['class' => 'nav nav-sidebar'],
        'items' => [
            ['label' => 'tickets', 'url' => ['/ticket']],
            ['label' => 'escalated_ticket', 'url' => ['/escalated-ticket']],
            ['label' => 'employee', 'url' => ['/employee1']],
            ['label' => 'position', 'url' => ['/position1']],
            ['label' => 'department', 'url' => ['/department1']],
            ['label' => 'hierarchy_level', 'url' => ['/hierarchy-level']]
            ],
        ]);
    ?>

<div class="escalated-ticket-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'esc_date_received',
            'esc_time_receive',
            'esc_reason',
            'esc_owner',
            'esc_status',
            'esc_priority',
            'esc_time_closed',
            'esc_date_closed',
            'ticket_id',
            'esc_level',
        ],
    ]) ?>

</div>
