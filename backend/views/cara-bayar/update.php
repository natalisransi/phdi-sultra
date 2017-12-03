<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CaraBayar */

$this->title = 'Update Cara Bayar: ' . $model->cara_bayar_id;
$this->params['breadcrumbs'][] = ['label' => 'Cara Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cara_bayar_id, 'url' => ['view', 'id' => $model->cara_bayar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cara-bayar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
