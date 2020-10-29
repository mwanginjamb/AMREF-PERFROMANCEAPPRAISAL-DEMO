<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Strategicplan */

$this->title = 'Create Strategicplan';
$this->params['breadcrumbs'][] = ['label' => 'Strategicplans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="strategicplan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
