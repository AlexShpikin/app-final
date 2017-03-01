<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonsModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persons-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class'=>'form-control text']) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true, 'class'=>'form-control text']) ?>

    <?= $form->field($model, 'sername')->textInput(['maxlength' => true, 'class'=>'form-control text']) ?>
   
    <?= $form->field($model, 'boss_id')->dropDownList(ArrayHelper::map($model->getPersons(), 'id', 'fullName'), ['prompt'=>'']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
