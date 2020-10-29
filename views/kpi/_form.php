<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kpi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'objectiveid')->textInput() ?>

    <?= $form->field($model, 'kpi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
