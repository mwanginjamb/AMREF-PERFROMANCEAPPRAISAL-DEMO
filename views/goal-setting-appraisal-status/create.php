<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GoalSettingAppraisalStatus */

$this->title = 'Create Goal Setting Appraisal Status';
$this->params['breadcrumbs'][] = ['label' => 'Goal Setting Appraisal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goal-setting-appraisal-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
