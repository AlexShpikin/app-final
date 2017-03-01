<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PersonsModel */

$this->title = 'Персональная карточка: '. $model->name .' '.$model->patronymic.' '.$model->sername;
$this->params['breadcrumbs'][] = ['label' => 'Persons Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="persons-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>
