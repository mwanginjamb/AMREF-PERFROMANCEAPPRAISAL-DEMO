<?php
/**
 * Created by PhpStorm.
 * User: HP ELITEBOOK 840 G5
 * Date: 10/30/2020
 * Time: 12:54 AM
 */


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label(false) ?>

            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false) ?>

            <?= $form->field($model, 'passwordconfirm')->passwordInput(['placeholder' => 'Confirm Password'])->label(false) ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
