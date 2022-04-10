<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user app\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="container" style="display:flex; margin:10px ; padding: 2rem 4rem; width: 100%; height: auto">
    <div class="password-reset" style="background-color: rgba(23, 162, 184,0.3); border-radius: 10px">
        <p>Hello <?= Html::encode($user->username) ?>,</p>

        <p>Follow the link below to reset your password:</p>

        <p><?= Html::a('Reset Password', $resetLink,['style'=> 'color:#fff;padding: 3px 5px; background-color:rgb(102, 101, 238); text-decoration: none; margin: 10px']) ?></p>
    </div>
</div>

