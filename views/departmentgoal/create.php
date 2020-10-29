<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departmentgoal */

$this->title = 'Create Departmentgoal';
$this->params['breadcrumbs'][] = ['label' => 'Departmentgoals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departmentgoal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
