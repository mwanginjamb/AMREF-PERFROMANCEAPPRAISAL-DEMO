<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizationalgoal */

$this->title = 'Update Organizationalgoal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Organizationalgoals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="organizationalgoal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
