<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DepartmentgoalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departmentgoals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departmentgoal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Departmentgoal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'departmentgoal:ntext',
            'departmentid',
            'organization_goal_id',
            'calendarid',
            //'updated_by',
            //'created_by',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
