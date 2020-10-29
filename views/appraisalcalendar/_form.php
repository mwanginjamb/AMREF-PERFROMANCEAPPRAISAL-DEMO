<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Appraisalcalendar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appraisalcalendar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'yearstart')->textInput() ?>

    <?= $form->field($model, 'yearend')->textInput() ?>

    <?= $form->field($model, 'calendar_year_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mid_year_start')->textInput() ?>

    <?= $form->field($model, 'mid_year_end')->textInput() ?>

    <?= $form->field($model, 'end_year_start')->textInput() ?>

    <?= $form->field($model, 'end_year_end')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
