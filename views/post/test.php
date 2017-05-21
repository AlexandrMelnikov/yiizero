<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Test Action</h1>
<?php
//debug($model);
?>
<?php if( Yii::$app->session->hasFlash('success') ): ?>
     <?php echo Yii::$app->session->getFlash('success'); ?>
<?php endif; ?>

<?php if( Yii::$app->session->hasFlash('error') ): ?>
    <?php echo Yii::$app->session->getFlash('error'); ?>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testFotm']]) ?>
      <?= $form->field($model, 'name')->label('Имя') ?>
      <?= $form->field($model, 'email') ?>
      <?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows' =>5]) ?>
      <?= Html::submitButton('Отправить', ['class'=> 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
