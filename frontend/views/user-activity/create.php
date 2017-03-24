<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserActivity */

$this->title = Yii::t('app', 'Create User Activity');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Activities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
