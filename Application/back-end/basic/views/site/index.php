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


<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => 'E M M - Taal Vista',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    ?>


    <?php
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Service Tickets', 'url' => ['/site/servtickets']],
            ['label' => 'Escalated Tickets', 'url' => ['/site/esctickets']],
            ['label' => 'Reports', 'url' => ['/site/reports']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);


    NavBar::end();
    ?>    

</div>