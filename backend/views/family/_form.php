<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Anggota;
use backend\models\FamilyKat;
use backend\models\Pekerjaan;
use backend\models\Pendidikan;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Family */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="family-form">

    <?php $form = ActiveForm::begin(); ?>

   
    
    <?= $form->field($model, 'family_kat_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(FamilyKat::find()->all(),'family_kat_id','family_kat_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Hubungan Keluarga'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>
    
    
 <?= $form->field($model, 'anggota_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(Anggota::find()->all(),'anggota_id','anggota_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Kepala Keluarga'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    
    
    
    <?= $form->field($model, 'tgl_lahir')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
   
    
    <?= $form->field($model, 'pendidikan_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(Pendidikan::find()->all(),'pendidikan_id','pendidikan_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Pendidikan'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>
    

   <?= $form->field($model, 'pekerjaan_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(Pekerjaan::find()->all(),'pekerjaan_id','pekerjaan_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Pekerjaan'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>

   

   <?= $form->field($model, 'foto')->fileInput();?>

    <?= $form->field($model, 'family_ket')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
