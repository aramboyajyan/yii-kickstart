<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Error <?php print $code; ?></h2>

<div class="error">
<?php print CHtml::encode($message); ?>
</div>