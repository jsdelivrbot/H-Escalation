<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel app\models\Position1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Positions';
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


<div class="position1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Position', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pos_name',
            'pos_des',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
