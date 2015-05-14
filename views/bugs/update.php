<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bugs */

$this->title = 'Update Bugs: ' . ' ' . $model->bug_id;
$this->params['breadcrumbs'][] = ['label' => 'Bugs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bug_id, 'url' => ['view', 'id' => $model->bug_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bugs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
