<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Anggota */

$this->title = 'Update Anggota: ' . $model->anggota_id;
$this->params['breadcrumbs'][] = ['label' => 'Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->anggota_id, 'url' => ['view', 'id' => $model->anggota_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anggota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
