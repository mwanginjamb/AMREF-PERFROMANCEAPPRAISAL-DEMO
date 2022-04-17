<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MidYearAppraisalStatus */

$this->title = 'Create Mid Year Appraisal Status';
$this->params['breadcrumbs'][] = ['label' => 'Mid Year Appraisal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-year-appraisal-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
