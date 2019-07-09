<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<article>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 login">
            <h3>If you wont to write the comments, please, </h3>
            <?php if(Yii::$app->session->hasFlash('success')):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong> <?php  echo Yii::$app->session->getFlash('success');?></strong>
                </div>

            <?php endif;?>
            <?php if(Yii::$app->session->hasFlash('error')):?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><?php echo Yii::$app->session->getFlash('error');?></strong>
                </div>

            <?php endif;?>

        <?php $form = ActiveForm::begin(['id'=>'form_id'])?>
            <?=$form->field($model,'name')->textInput([
                    'class' =>'form-control',
                    'id' => 'inputName',
                     'placeholder' => 'Name'])?>
            <?=$form->field($model,'email')->input('email',[
                     'class'=> 'form-control',
                     'id' => 'inputEmail',
                     'placeholder' => 'E-mail'])?>
            <?=$form->field($model,'password')->passwordInput([
                    'class' => 'form-control',
                     'id' => 'inputPassword',
                     'placeholder' =>'Password'
            ])?>

            <?=Html::submitButton('Отправить',['class'=>'btn btn-default'])?>
        <?php ActiveForm::end()?>

        </div>

    </div>
</article>
<style>
    label{
        display: none;
    }
</style>
