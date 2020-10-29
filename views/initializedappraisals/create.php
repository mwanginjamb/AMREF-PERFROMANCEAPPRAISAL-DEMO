<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Initializedappraisals */

$this->title = 'Create Initializedappraisals';
$this->params['breadcrumbs'][] = ['label' => 'Initializedappraisals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="initializedappraisals-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
