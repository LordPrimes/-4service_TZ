<?php 
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<?php $qwerty = ActiveForm::begin([
'id' => '123'


]);
?>
<?= $qwerty->field($model, 'name')->textInput(['autofocus' => true]) ?>
<?= $qwerty->field($model, 'email')?>
<?= $qwerty->field($model, 'questions')->textarea()?>
<div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
<?php ActiveForm::end(); ?>
<?php 
echo date("d m o");
?>
