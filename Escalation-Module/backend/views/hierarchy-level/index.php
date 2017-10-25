<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HierarchyLevelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hierarchy Levels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hierarchy-level-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hierarchy Level', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'level_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
