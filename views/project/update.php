<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = 'Update Projects: ' . ' ' . $model->project_id;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->project_id, 'url' => ['view', 'id' => $model->project_id]];
$this->params['breadcrumbs'][] = 'Update';
?>


   <div class="other-tools-menu">

             <div class="user">

                <div class="user-image"></div>
                <span>Jhon Doe</span>

                 <ul class="user-menu-nav">

                    <!-- LOCAL PATHS -->

                   <li><a href="project">My Projects</a></li>
                    <li><a href="clients">Clients</a></li>
                    <li><a href="bugs">Bugs</a></li>



                    <!-- DEPLOYMENT PATHS -->
                    <!-- <li><a href="/buggly/web/projects">My Projects</a></li>
                    <li><a href="/buggly/web/clients">Clients</a></li>
                    <li><a href="/buggly/web/bugs">Bugs</a></li> -->
                    <li class="coming-soon">My Team</li>
                </ul>

            </div>

        </div>





<div class="projects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
