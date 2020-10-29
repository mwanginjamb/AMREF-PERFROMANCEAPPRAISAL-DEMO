<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Appraisalcalendar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Appraisalcalendars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="appraisalcalendar-view">

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
            'yearstart',
            'yearend',
            'calendar_year_description:ntext',
            'mid_year_start',
            'mid_year_end',
            'end_year_start',
            'end_year_end',
            'updated_by',
            'created_by',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
