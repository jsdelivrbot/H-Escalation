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

$this->title = 'Update Escalated Ticket: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Escalated Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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

<div class="escalated-ticket-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
