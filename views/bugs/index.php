<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BugsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bugs';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="bugs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('+ New Bug', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bug_id',
            'bug_name',
            'bug_description:ntext',
            'bug_createdDate',
            'bug_status:ntext',
            // 'project_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
