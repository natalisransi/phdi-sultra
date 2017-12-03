<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BayarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bayars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bayar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bayar_id',
            'anggota_id',
            'bayar_tgl',
            'jumlah',
            'cara_bayar_id',
            // 'jenis_bayar_id',
            // 'bukti_file',
            // 'ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
