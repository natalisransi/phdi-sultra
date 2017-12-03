<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bayar */

$this->title = 'Update Bayar: ' . $model->bayar_id;
$this->params['breadcrumbs'][] = ['label' => 'Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bayar_id, 'url' => ['view', 'id' => $model->bayar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bayar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
