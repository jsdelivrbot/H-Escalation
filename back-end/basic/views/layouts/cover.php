<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<style>
<?php 
include 'css/site.css'; 
?>
</style>

<?php $this->beginBody() ?>


<?php
/* @var $this yii\web\View */
$this->title = 'E M M - Taal Vista';
?>

<center>
	<img class='logo' border="0" src=<?php echo Yii::$app->request->baseUrl . "/Images/logo.png";?> style="float:center" height=100; width=300;>
</center>

<center>
	<p class="intro">ESCALATION MANAGEMENT</br>
	MODULE</p>
</center>

<center>
	<div class="button-container">
		<img class="sbuttons" src=<?php echo Yii::$app->request->baseUrl . "/Images/service-ticket-gold.png"; ?> onclick="location='index.php?r=site%2Fservtickets'" height=100; width=300;>
		<img class="ebuttons" src=<?php echo Yii::$app->request->baseUrl . "/Images/escalated-ticket-gold.png"; ?> onclick="location='index.php?r=site%2Fesctickets'" height=100; width=300;> 
	</div>
</center>

<?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>