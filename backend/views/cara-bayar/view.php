<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CaraBayar */

$this->title = $model->cara_bayar_id;
$this->params['breadcrumbs'][] = ['label' => 'Cara Bayars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cara-bayar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cara_bayar_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cara_bayar_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cara_bayar_id',
            'cara_bayar_nama',
            'cara_bayar_ket',
        ],
    ]) ?>

</div>
