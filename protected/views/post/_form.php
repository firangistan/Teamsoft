<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->errorSummary($tag); ?>


	
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	

	
		
		<?php echo $form->ckEditorRow($model, 'content', array('options'=>array('fullpage'=>'js:true', 'width'=>'640', 'resize_maxWidth'=>'640','resize_minWidth'=>'320')));?>
		

		
			<?php //$this->widget('ext.select2.ESelect2',array(
  					//		'model'=>$tag,
					//		 'attribute'=>'tag',
					//		 'data'=>$tag->getAllTags(),
					//		 'options' => array(
					//		  	'width'=>'20%',
					//		  	'placeholder'=>'Start tagging here.',
					//		  	
    				//			'allowClear'=>true,
					//		  	),
					//		  'htmlOptions'=>array(
					//		    'multiple'=>'multiple',
					//		    
					//		  ),
					//		  )
					//		); ?>

		
	
		<?php echo $form->textFieldRow($tag, 'tag', array('class'=>'span3')); ?>
	
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',$model->getPostStatus()); ?>

		<?php echo $form->error($model,'status'); ?>
	

	<div class="row-fluid">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType'=>'submit',
                        'type'=>'success',
                        'label'=>'Send',
                )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->