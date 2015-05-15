<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Clients;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_description')->textarea(['rows' => 6]) ?>

      <?= // Custom drop down, populated by database values
        $form->field($model, 'project_client')->dropDownList(
        ArrayHelper::map(Clients::find()->all(),'client_id', 'client_name'),
        ['prompt'=>'Select Client']
    ) ?>

    <?= $form->field($model, 'project_startdate')->textInput() ?>

    <?= $form->field($model, 'project_enddate')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
