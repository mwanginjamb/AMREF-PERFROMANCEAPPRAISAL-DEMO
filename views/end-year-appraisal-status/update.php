<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EndYearAppraisalStatus */

$this->title = 'Update End Year Appraisal Status: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'End Year Appraisal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="end-year-appraisal-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
