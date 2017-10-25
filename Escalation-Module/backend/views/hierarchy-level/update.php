<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HierarchyLevel */

$this->title = 'Update Hierarchy Level: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hierarchy Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hierarchy-level-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
