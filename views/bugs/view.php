<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bugs */

$this->title = $model->bug_id;
$this->params['breadcrumbs'][] = ['label' => 'Bugs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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

<div class="bugs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bug_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bug_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bug_id',
            'bug_name',
            'bug_description:ntext',
            'bug_createdDate',
            'bug_status:ntext',
            'project_id',
        ],
    ]) ?>

</div>
