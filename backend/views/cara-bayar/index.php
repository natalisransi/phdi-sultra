<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CaraBayarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cara Bayars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cara-bayar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cara Bayar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cara_bayar_id',
            'cara_bayar_nama',
            'cara_bayar_ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
