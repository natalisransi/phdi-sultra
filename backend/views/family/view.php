<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Family */

$this->title = $model->family_id;
$this->params['breadcrumbs'][] = ['label' => 'Families', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->family_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->family_id], [
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
            'family_id',
            'family_kat_id',
            'anggota_id',
            'nama',
            'jenis_kelamin',
            'tempat_lahir',
            'tgl_lahir',
            'pekerjaan_id',
            'pendidikan_id',
            'foto',
            'family_ket',
        ],
    ]) ?>

</div>
