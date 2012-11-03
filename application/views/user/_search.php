<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php print $form->label($model,'uid'); ?>
		<?php print $form->textField($model,'uid'); ?>
	</div>

	<div class="row">
		<?php print $form->label($model,'username'); ?>
		<?php print $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php print $form->label($model,'email'); ?>
		<?php print $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php print CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->