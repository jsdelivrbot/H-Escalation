<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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

    <?php
        Echo Nav::widget([
        'options' => ['class' => 'nav nav-sidebar'],
        'items' => [
            ['label' => 'tickets', 'url' => ['/ticket']],
            ['label' => 'escalated_ticket', 'url' => ['/escalated-ticket']],
            ['label' => 'employee', 'url' => ['/employee1']],
            ['label' => 'position', 'url' => ['/position1']],
            ['label' => 'department', 'url' => ['/department1']],
            ['label' => 'hierarchy_level', 'url' => ['/hierarchy-level']],
        ],
    ]);
    ?>