<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Card */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatusOptions()) ?>

    <?= $form->field($model, 'triggeringRollMin')->textInput() ?>

    <?= $form->field($model, 'triggeringRollMax')->textInput() ?>

    <?= $form->field($model, 'triggersOn')->dropDownList($model->getTriggersOnOptions()) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'background')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category')->dropDownList($model->getCategoryOptions()) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'effect')->dropDownList($model->getEffectOptions()) ?>

    <?= $form->field($model, 'effectFrom')->dropDownList($model->getEffectFromOptions()) ?>

    <?= $form->field($model, 'effectValue')->textInput() ?>

    <?= $form->field($model, 'effectMultiplier')->dropDownList($model->getEffectMultiplierOptions()) ?>

    <?= $form->field($model, 'effectMultiplierCategory')->dropDownList($model->getCategoryOptions()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
