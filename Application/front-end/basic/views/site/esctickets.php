<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

use yii\widgets\DetailView;

AppAsset::register($this);
?>

<style>
<?php 
include 'css/site.css';
?>
</style>

<?php
/* @var $this yii\web\View */
$this->title = 'Escalated Tickets';
$this->params['breadcrumbs'][] = $this->title;
?>