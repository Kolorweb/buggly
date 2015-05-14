<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bugs */

$this->title = 'Create Bugs';
$this->params['breadcrumbs'][] = ['label' => 'Bugs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bugs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
