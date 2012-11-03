<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php print Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id' => 'contact-form',
	'enableClientValidation'=>true,
	'clientOptions' => array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php print $form->errorSummary($model); ?>

	<div class="row">
		<?php print $form->labelEx($model,'name'); ?>
		<?php print $form->textField($model,'name'); ?>
		<?php print $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php print $form->labelEx($model,'email'); ?>
		<?php print $form->textField($model,'email'); ?>
		<?php print $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php print $form->labelEx($model,'subject'); ?>
		<?php print $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php print $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php print $form->labelEx($model,'body'); ?>
		<?php print $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php print $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php print $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php print $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php print $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php print CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>