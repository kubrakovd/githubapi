<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserActivity */

$this->title = "User activity id №" . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Activities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-activity-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
             [
            'attribute' => 'date_created',
            'format' =>  ['date', 'd.m.Y'],
            ],
            'action',
        ],
    ]) ?>

</div>
