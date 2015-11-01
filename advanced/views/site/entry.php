<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('My Name') ?>
<?= $form->field($model, 'email')->label('My Email') ?>

<div>
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>

</div>

<?php ActiveForm::end(); ?>
