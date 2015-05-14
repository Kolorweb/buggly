<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => '<img src="../../web/assets/img/logo-horiz-white-01.svg" alt="">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
          $navItems=[
                    ['label' => 'Home', 'url' => ['/site/index']],
                    // ['label' => 'Status', 'url' => ['/status/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    // ['label' => 'Menu', 'url' => ['/site/menu']]
                  ];
                  if (Yii::$app->user->isGuest) {
                    array_push($navItems,['label' => 'Sign In', 'url' => ['/user/login']],['label' => 'Sign Up', 'url' => ['/user/register']]);
                  } else {
                    array_push($navItems,['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']]
                    );
                  }
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $navItems,
                ]);
            NavBar::end();
        ?>

        <!-- =================

        User menu | NOTE: need to find a way of @include or if/else statement to only show on certain pages

        ================== -->

        <div class="other-tools-menu">

             <div class="user">

                <div class="user-image"></div>
                <span>Jhon Doe</span>

                 <ul class="user-menu-nav">
                    <li><a href="/buggly/web/projects">My Projects</a></li>
                    <li><a href="/buggly/web/clients">Clients</a></li>
                    <li><a href="/buggly/web/bugs">Bugs</a></li>
                    <li class="coming-soon">My Team</li>
                </ul>

            </div>

        </div>



        <div>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
