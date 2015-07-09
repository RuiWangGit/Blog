<?php
/* @var $this SiteController */
/* @var $model SignupForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Signup';
$this->breadcrumbs=array(
	'Signup',
);
?>


<div class="container">

	<h1>signup</h1>

	<p>Please fill out the following form with your signup credentials:</p>

	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'signup-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<div class="row">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email'); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'password_cfn'); ?>
			<?php echo $form->passwordField($model,'password_cfn'); ?>
			<?php echo $form->error($model,'password_cfn'); ?>
		</div>

		

		<div class="row buttons">
			<?php echo CHtml::submitButton('signup'); ?>
		</div>

	<?php $this->endWidget(); ?>
	</div><!-- form -->

</div>	
