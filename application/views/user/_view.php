<div class="view">

	<b><?php print CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php print CHtml::link(CHtml::encode($data->uid), array('view', 'id'=>$data->uid)); ?>
	<br />

	<b><?php print CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php print CHtml::encode($data->username); ?>
	<br />

	<b><?php print CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php print CHtml::encode($data->email); ?>
	<br />

	<b><?php print CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php print CHtml::encode($data->password); ?>
	<br />


</div>