<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bugs */

$this->title = 'Create Bugs';
$this->params['breadcrumbs'][] = ['label' => 'Bugs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

   <div class="other-tools-menu">

             <div class="user">

                <div class="user-image"></div>
                <span>Jhon Doe</span>

                 <ul class="user-menu-nav">

                    <!-- LOCAL PATHS -->

            <li><a href="/buggly/web/project">My Projects</a></li>
                    <li><a href="/buggly/web/clients">Clients</a></li>
                    <li><a href="/buggly/web/bugs">Bugs</a></li>



                    <!-- DEPLOYMENT PATHS -->
                    <!-- <li><a href="/buggly/web/projects">My Projects</a></li>
                    <li><a href="/buggly/web/clients">Clients</a></li>
                    <li><a href="/buggly/web/bugs">Bugs</a></li> -->
                    <li class="coming-soon">My Team</li>
                </ul>

            </div>

        </div>

<div class="bugs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
