<?php

/* @var $this yii\web\View */

use yii\bootstrap4\Html;




// Appraisee Actions

if($model->isAppraisee)
{

    echo Html::a('<i class="fas fa-forward"></i> submit',['submit'],['class' => 'btn btn-app mx-1','data' => [
        'confirm' => 'Are you sure you want to submit this objectives for Approval?',
        'params' => [
            'appraisalNo' => $model->id,
            'employeeNo' => $model->employeeNo
        ],
        'method' => 'post',
    ],
        'title' => 'Submit Objectives for Approval'

    ]);
}
elseif($model->isSupervisor)
{

}
elseif($model->isOverview)
{

}

?>
