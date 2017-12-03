<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CaraBayar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cara-bayar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cara_bayar_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cara_bayar_ket')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
