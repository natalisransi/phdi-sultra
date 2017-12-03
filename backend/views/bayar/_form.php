<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Anggota;
use backend\models\CaraBayar;
use backend\models\JenisBayar;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Bayar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bayar-form">

    <?php $form = ActiveForm::begin(); ?>

    
    
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

    
    
     <?= $form->field($model, 'bayar_tgl')->widget(
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
    
    

    <?= $form->field($model, 'jumlah')->textInput() ?>

    
    
    <?= $form->field($model, 'cara_bayar_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(CaraBayar::find()->all(),'cara_bayar_id','cara_bayar_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Cara Bayar'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>

    
    
    
    
    <?= $form->field($model, 'jenis_bayar_id')->widget(Select2::classname(), [
        
        
        'data' => ArrayHelper::map(JenisBayar::find()->all(),'jenis_bayar_id','jenis_bayar_nama'),
        'language' => 'en',
       // 'tabindex' => false,
        'options' => ['placeholder' => 'Pilih Jenis Bayar Bayar'],
        'pluginOptions' => [
            'allowClear' => true
            ],
        ]);
  
    ?>
    
    
    <?= $form->field($model, 'bukti_file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ket')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
