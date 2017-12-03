<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\Anggota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anggota_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anggota_t4_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anggota_tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'pekerjaan_id')->textInput() ?>

    <?= $form->field($model, 'pendidikan_id')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
