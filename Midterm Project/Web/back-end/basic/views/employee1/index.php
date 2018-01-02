<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel app\models\Employee1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
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

<div class="employee1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'emp_num',
            'emp_fname',
            'emp_mname',
            'emp_lname',
            // 'emp_contact_no',
            // 'dept_id',
            // 'pos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
