<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JenisIdentitasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Identitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-identitas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jenis Identitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jenis_identitas_id',
            'jenis_identitas_nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
