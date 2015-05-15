<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Projects;

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

       <?= // Custom drop down, populated by database values
        $form->field($model, 'bug_id')->dropDownList(
        ArrayHelper::map(Projects::find()->all(),'project_id', 'project_name'),
        ['prompt'=>'Select Project']
    ) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
