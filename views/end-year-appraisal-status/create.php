<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EndYearAppraisalStatus */

$this->title = 'Create End Year Appraisal Status';
$this->params['breadcrumbs'][] = ['label' => 'End Year Appraisal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="end-year-appraisal-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
