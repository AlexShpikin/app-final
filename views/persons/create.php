<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PersonsModel */

$this->title = 'Create Persons Model';
$this->params['breadcrumbs'][] = ['label' => 'Persons Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persons-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>
