<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Appraisalcalendar */

$this->title = 'Update Appraisalcalendar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Appraisalcalendars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appraisalcalendar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
