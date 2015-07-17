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
	
	$qid = 0;
	

	foreach($dataProvider->getData() as $userData){
		
		//users can not talk to themself
		//session always stores user id
		if ( $userData['id'] != Yii::app()->session['uid'] ){
			if ( $userData['id'] == 8) $qid = 1;
			if ( $userData['id'] == 9) $qid = 2;
			if ( $userData['id'] == 10) $qid = 3;
			if ( $userData['id'] == 36) $qid = 4;

		?>

			<div class="private-question" >
				<p> <a href ="/index.php?r=users/view&qid=<?=$qid?>&id=<?= $userData['id'] ?>"> Question: <?= $qid ?>,   </a></p>
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
