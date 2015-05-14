<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bugs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bugs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bug_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bug_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bug_createdDate')->textInput() ?>

    <?= $form->field($model, 'bug_status')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'project_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
