<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Strategicplan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="strategicplan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'start_year')->textInput() ?>

    <?= $form->field($model, 'end_year')->textInput() ?>

    <?= $form->field($model, 'strategicplan_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
