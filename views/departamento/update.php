<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departamento */

$this->title = 'Update Departamento: ' . ' ' . $model->coddpto;
$this->params['breadcrumbs'][] = ['label' => 'Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->coddpto, 'url' => ['view', 'id' => $model->coddpto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>