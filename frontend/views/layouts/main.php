<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\models\User;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>


<div class="wrap">
    <?php
NavBar::begin([
    'brandLabel' => 'Nomāt Prieks!',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top lightGreen pullDown',
    ],
]);
$menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],
    ['label' => 'Contact', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Register', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
    $menuItems[] = ['label' => 'Cart', 'url' => ['/site/cart']];
    if (!Yii::$app->user->isGuest) {
        $user = User::find()->where(['id' => Yii::$app->user->identity])->one();
        if ($user['admin'] == '1') {
            $menuItems[] = ['label' => 'Users', 'url' => ['/user']];
            $menuItems[] = ['label' => 'Products', 'url' => ['/products']];
        }
    }
    $menuItems[] = '<li>'
    . Html::beginForm(['/site/logout'], 'post')
    . Html::submitButton(
        'Logout (' . Yii::$app->user->identity->username . ')',
        ['class' => 'lightGreen btn btn-link logout']
    )
    . Html::endForm()
        . '</li>';
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right lightGreen pullDown'],
    'items' => $menuItems,
]);
NavBar::end();
?>
    <div class="container">
        <?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])?>
        <?=Alert::widget()?>
        <?=$content?>
    </div>
</div>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
