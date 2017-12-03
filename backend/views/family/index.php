<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FamilySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Families';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Family', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'family_id',
            'family_kat_id',
            'anggota_id',
            'nama',
            'jenis_kelamin',
            // 'tempat_lahir',
            // 'tgl_lahir',
            // 'pekerjaan_id',
            // 'pendidikan_id',
            // 'foto',
            // 'family_ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
