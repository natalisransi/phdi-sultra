<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JenisIdentitas */

$this->title = 'Update Jenis Identitas: ' . $model->jenis_identitas_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenis_identitas_id, 'url' => ['view', 'id' => $model->jenis_identitas_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-identitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
