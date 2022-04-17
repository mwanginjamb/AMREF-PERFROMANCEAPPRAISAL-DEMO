<?php

/* @var $this yii\web\View */

use yii\helpers\Html;



$this->title = Yii::$app->params['GeneralTitle'];
$this->params['breadcrumbs'][] = ['label' => 'Appraisals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Appraisal Card', 'url' => ['appraisal','app'=> $model->id]];
$form = \yii\widgets\ActiveForm::begin();
//Yii::$app->recruitment->printrr($model->departmentalobjectives);
Yii::$app->session->set('Goal_Setting_Status',$model->goal_setting_status);
Yii::$app->session->set('MY_Appraisal_Status',$model->my_status);
Yii::$app->session->set('EY_Appraisal_Status',$model->ey_status);
//Yii::$app->recruitment->printrr($model);
?>
<div class="appraisal">


<!--    Action Buttons-->

<?php $this->render('_actions', ['model' => $model])?>

<!--    / Action Buttons-->



    <div class="row">
        <div class="col-md-12">
                <!--   Appraisee Data         -->

            <div class="card card-info">
                <div class="card-header">

                        <h3 class="card-title"> Appraisee Data</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>

                </div>


                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <?= Html::label('Name',['name'])?>
                            <?= Html::input('text', 'name', $model->employee['firstname'].' '. $model->employee['middlename'].' '.$model->employee['lastname'], ['class' => 'form-control','readonly' => true]) ?>

                            <?= Html::label('Email',['email'])?>
                            <?= Html::input('text', 'email', $model->employee['email'], ['class' => 'form-control','readonly' => true]) ?>

                            <?= $form->field($model, 'supervisor_id')->textInput(['readonly' =>  true]) ?>

                            <?= Html::label('Department',['department'])?>
                            <?= Html::input('text', 'department', $model->initialization->department->department, ['class' => 'form-control','readonly' => true]) ?>


                            <?= $form->field($model, 'goal_setting_status')->dropdownList($objectiveSettingStatus,['readonly' =>  true]) ?>

                        </div>
                        <div class="col-md-6">
                            <?= Html::label('Employee Number',['name'])?>
                            <?= Html::input('text', 'employee_no', $model->employee['employee_no'], ['class' => 'form-control','readonly' => true]) ?>

                            <?= Html::label('Cell No.',['cell'])?>
                            <?= Html::input('text', 'cell', $model->employee['cell'], ['class' => 'form-control','readonly' => true]) ?>

                            <?= Html::label('Supervisor Name',['supervisor'])?>
                            <?= Html::input('text', 'name', $model->supervisor['firstname'].' '. $model->supervisor['middlename'].' '.$model->supervisor['lastname'], ['class' => 'form-control','readonly' => true]) ?>

                            <?= $form->field($model, 'my_status')->dropdownList($appraisalStatus, ['readonly' =>  true]) ?>
                            <?= $form->field($model, 'ey_status')->dropdownList($appraisalStatus, ['readonly' =>  true]) ?>

                        </div>
                    </div>
                </div>
            </div>

            <!--  Performance Objectives          -->

            <div class="card card-info">
                <div class="card-header">

                    <h3 class="card-title"> Performance Objectives</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>

                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tr><td colspan="2"><b>Department Objectives</b></td></tr>
                                <tbody>
                                <?php foreach($model->departmentalobjectives as $dobjective): ?>
                                    <tr class="parent">
                                        <td><span>+</span></td>
                                        <td><?=$dobjective->departmentgoal ?></td>
                                    </tr>
                                    <tr class="child">

                                        <td colspan="2">
                                            <table class="table table-hover table-info">
                                                <thead>
                                                <tr>
                                                    <td class="text-bold">#</td>
                                                    <td class="text-bold">KRA / Performance Objective</td>
                                                    <td class="text-bold">Perfomance Level</td>
                                                    <td class="text-bold">Perfomance Comment</td>
                                                    <td class="text-bold">Appraisee Self_Rating</td>
                                                    <td class="text-bold">Appraiser Rating</td>
                                                    <td class="text-bold">Agreed Rating</td>
                                                    <td class="text-bold">Rating Comments</td>
                                                    <td class="text-bold">Employee Comments</td>
                                                    <td class="text-bold">Overall Weight</td>
                                                    <td><?= Html::a('<i class="fas fa-plus"></i>',['objective/create','dgid'=> $dobjective->id,'Employee_No' => $model->employee['employee_no'],'appraisal_Id' => $model->id],['class' => 'btn btn-xs btn-success add-objective','title' => 'Add Objective'])?></td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php

                                                foreach($dobjective->objectives as $obj ){ ?>

                                                    <tr class="parent">
                                                        <td><span>+</span></td>
                                                        <td><?= $obj->objective ?></td>
                                                        <td><?= !empty($obj->Perfomance_Level)?$obj->Perfomance_Level:'' ?></td>
                                                        <td><?= !empty($obj->Perfomance_Comment)?$obj->Perfomance_Comment:'' ?></td>
                                                        <td><?= !empty($obj->Appraisee_Self_Rating)?$obj->Appraisee_Self_Rating:'' ?></td>
                                                        <td><?= !empty($obj->Appraiser_Rating)?$obj->Appraiser_Rating:'' ?></td>
                                                        <td><?= !empty($obj->Agreed_Rating)?$obj->Agreed_Rating:'' ?></td>
                                                        <td><?= !empty($obj->Rating_Comments)?$obj->Rating_Comments:'' ?></td>
                                                        <td><?= !empty($obj->Employee_Comments)?$obj->Employee_Comments:'' ?></td>
                                                        <td><?= !empty($obj->weight)?$obj->weight:'' ?></td>
                                                        <td>
                                                            <?= Html::a('<i class="fa fa-edit mx-auto"></i>',['objective/update','id' => $obj->id],['class'=> 'btn btn-xs btn-warning add-objective','title' => 'Update Objective'])?>
                                                            <?= Html::a('<i class="fa fa-trash mx-auto"></i>',['objective/delete','id' => $obj->id],['class'=> 'btn btn-xs btn-danger delete-objective','title' => 'Delete Objective'])?></td>
                                                    </tr>

                                                    <!--KPI-->

                                                    <tr class="child">
                                                        <td colspan="11">
                                                            <table class="table table-stripped table-success">
                                                                <thead>
                                                                <tr>
                                                                    <td class="text-bold text-primary">KPI</td>
                                                                    <td class="text-bold text-primary">Due Date</td>
                                                                    <th><?= ($model->is_goal_setting)?Html::a('<i class="fas fa-plus"></i>',['kpi/create','objectiveid'=> $obj->id],['class' => 'btn btn-xs btn-success add-objective','title' => 'Add Objective KPI (MAX 3)']):'' ?></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>


                                                                <?php foreach($obj->kpis as $kpi){ ?>

                                                                    <tr>
                                                                        <td><?= $kpi->kpi ?></td>
                                                                        <td><?= !empty($kpi->due_date)?$kpi->due:'' ?></td>
                                                                        <td>
                                                                            <?= ($model->is_goal_setting )?Html::a('<i class="fas fa-edit"></i> ',['kpi/update','id'=> $kpi->id],['class' => 'btn btn-xs btn-primary add-objective', 'title' => 'Update Objective /KPI']):'' ?>
                                                                            <?= ($model->is_goal_setting )? Html::a('<i class="fa fa-trash"></i>',['kpi/delete','id' => $kpi->id],['class'=> 'btn btn-xs btn-danger delete-objective','title' => 'Delete Objective']):'' ?>
                                                                        </td>

                                                                    </tr>

                                                                <?php } ?>

                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>

                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



    <!--My Bs Modal template  --->

    <div class="modal fade bs-example-modal-lg bs-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="position: absolute">Performance Appraisal</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>

            </div>
        </div>
    </div>


<?php

$script = <<<JS


     /*Deleting Records*/
     
     $('.delete, .delete-objective').on('click',function(e){
         e.preventDefault();
           var secondThought = confirm("Are you sure you want to delete this record ?");
           if(!secondThought){//if user says no, kill code execution
                return;
           }
           
         var url = $(this).attr('href');
         $.post(url).done(function(msg){
             $('.modal').modal('show')
                    .find('.modal-body')
                    .html(msg.note);
         },'json');
     });


      /* Add Objective */
      
       $('.add-objective').on('click',function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        console.log('clicking...');
        $('.modal').modal('show')
                        .find('.modal-body')
                        .load(url); 

     });


      /*Handle modal dismissal event  */
    $('.modal').on('hidden.bs.modal',function(){
        var reld = location.reload(true);
        setTimeout(reld,1000);
    }); 


     /*Parent-Children accordion*/ 
    
    $('tr.parent').find('span').text('+');
    $('tr.parent').find('span').css({"color":"red", "font-weight":"bolder"});    
    $('tr.parent').nextUntil('tr.parent').slideUp(1, function(){});    
    $('tr.parent').click(function(){
            $(this).find('span').text(function(_, value){return value=='-'?'+':'-'}); //to disregard an argument -event- on a function use an underscore in the parameter               
            $(this).nextUntil('tr.parent').slideToggle(100, function(){});
     });
    
    /*Divs parenting*/
    
    $('p.parent').find('span').text('+');
    $('p.parent').find('span').css({"color":"red", "font-weight":"bolder"});    
    $('p.parent').nextUntil('p.parent').slideUp(1, function(){});    
    $('p.parent').click(function(){
            $(this).find('span').text(function(_, value){return value=='-'?'+':'-'}); //to disregard an argument -event- on a function use an underscore in the parameter               
            $(this).nextUntil('p.parent').slideToggle(100, function(){});
     });
    
JS;

$this->registerJs($script);


?>