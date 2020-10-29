<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppraisalcalendarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appraisalcalendars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appraisalcalendar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Appraisalcalendar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'yearstart',
            'yearend',
            'calendar_year_description:ntext',
            'mid_year_start',
            //'mid_year_end',
            //'end_year_start',
            //'end_year_end',
            //'updated_by',
            //'created_by',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
