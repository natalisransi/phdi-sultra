<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PendidikanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendidikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendidikan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pendidikan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pendidikan_id',
            'pendidikan_nama',
            'pendidikan_ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
