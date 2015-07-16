<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php 
	

	foreach($dataProvider->getData() as $userData){
		
		//users can not talk to themself
		//session always stores user id
		if ( $userData['id'] != Yii::app()->session['uid'] ){


		?>

			<div class="private-question" >
				<p>Question: <a href ="/index.php?r=users/view&id=<?= $userData['id'] ?>"><?= $userData['username'] ?></a></p>
			</div>

<?php
		}
	}

?>

<?php 
	// $this->widget('zii.widgets.CListView', array(
	// 	'dataProvider'=>$dataProvider,
	// 	'itemView'=>'_view',
	// ));
 ?>
