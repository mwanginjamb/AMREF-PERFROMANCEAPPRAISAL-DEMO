<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizationalgoal */

$this->title = 'Create Organizationalgoal';
$this->params['breadcrumbs'][] = ['label' => 'Organizationalgoals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizationalgoal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
