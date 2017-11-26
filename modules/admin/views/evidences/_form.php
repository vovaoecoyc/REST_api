<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Evidences */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evidences-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'request_id')->textInput() ?>

    <?= $form->field($model, 'counter_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'counter_id')->textInput() ?>

    <?= $form->field($model, 'counter_num')->textInput() ?>

    <?= $form->field($model, 'service_id')->textInput() ?>

    <?= $form->field($model, 'value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
