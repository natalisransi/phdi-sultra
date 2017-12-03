<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JenisBayar */

$this->title = 'Update Jenis Bayar: ' . $model->jenis_bayar_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenis_bayar_id, 'url' => ['view', 'id' => $model->jenis_bayar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-bayar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
