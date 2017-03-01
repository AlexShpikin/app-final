<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\PersonsModel;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $model app\models\PersonsModel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Persons Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="persons-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'sername',
            'patronymic',
            [
                'attribute'=>'boss_id',
                'value'=> $model->getBossName()
            ],
        ],
    ]) ?>

    <h2>Подчиненные</h2>
    <?= GridView::widget([
        'dataProvider' =>  new ActiveDataProvider(['query' => $model->getWorkers(),]),
        'layout'=>"{items}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'visible'=>false, ],

            'id',
            [
                'attribute'=>'name',
                'label' => 'Имя',
                'value'=> function($data){
                    return $data->getFullName();
                }
            ],
            ['class' => 'yii\grid\ActionColumn',
              'template'=>'{update}  {delete}',
            ],
        ],

    ]); 

    ?>
</div>
