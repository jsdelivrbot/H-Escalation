<!DOCTYPE html>
<html>

<body>



<?php

use yii\helpers\Html;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\models\EscalatedTicket */

$this->title = 'Create Escalated Ticket';
$this->params['breadcrumbs'][] = ['label' => 'Escalated Tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<center>
<div class="escalated-ticket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    	<?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
</div>
</center>

</body>
</html>