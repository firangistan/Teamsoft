<?php
/* @var $this PostController */
/* @var $model Post */

$this->widget('bootstrap.widgets.TbBreadCrumbs',array(
	'links'=>array('Create'),
	
));

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Create Post</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tag'=>$tag)); ?>
