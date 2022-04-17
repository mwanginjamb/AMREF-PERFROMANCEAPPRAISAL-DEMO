<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GoalSettingAppraisalStatus */

$this->title = 'Update Goal Setting Appraisal Status: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Goal Setting Appraisal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="goal-setting-appraisal-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
