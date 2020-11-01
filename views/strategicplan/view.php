<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Strategicplan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Strategicplans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="strategicplan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissable"><?= Yii::$app->session->getFlash('success') ?></div>
    <?php endif; ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Add', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View All', ['index'], ['class' => 'btn btn-info']) ?>
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
            //'id',
            'start_year:datetime',
            'end_year:datetime',
            'strategicplan_description:ntext',
            //'updated_by',
            //'created_by',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
