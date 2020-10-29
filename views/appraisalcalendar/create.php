<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Appraisalcalendar */

$this->title = 'Create Appraisalcalendar';
$this->params['breadcrumbs'][] = ['label' => 'Appraisalcalendars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appraisalcalendar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
