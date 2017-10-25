<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\HierarchyLevel */

$this->title = 'Create Hierarchy Level';
$this->params['breadcrumbs'][] = ['label' => 'Hierarchy Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hierarchy-level-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
