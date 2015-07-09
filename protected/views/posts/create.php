

<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);




// $this->menu=array(
// 	array('label'=>'List Posts', 'url'=>array('index')),
// 	array('label'=>'Manage Posts', 'url'=>array('admin')),
// );
?>

<div class="container">
<h1>Create Posts</h1>


<?php 
	// echo "dfasdfasdfads";
	// var_dump($model);
	// die;
echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>