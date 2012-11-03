<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>FALSE,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php print $form->errorSummary($model); ?>

	<div class="row">
		<?php print $form->labelEx($model,'username'); ?>
		<?php print $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php print $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php print $form->labelEx($model,'email'); ?>
		<?php print $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php print $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php print $form->labelEx($model,'password'); ?>
		<?php print $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php print $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php print CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->