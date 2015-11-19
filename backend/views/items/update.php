<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Item */
/* @var $tagsForm \backend\models\ItemTagsForm */

$this->title = $model->name;
$this->render('_breadcrumbs', ['model' => $model]);
$this->params['breadcrumbs'][] = 'Редактирование';

?>
<div class="item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tagsForm' => $tagsForm,
        'goto' => null,
    ]) ?>

</div>