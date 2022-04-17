<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MidYearAppraisalStatus */

$this->title = 'Update Mid Year Appraisal Status: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mid Year Appraisal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mid-year-appraisal-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
