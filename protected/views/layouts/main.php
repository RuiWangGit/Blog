<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.min.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php 
	//var_dump(Yii::app()->session);
	//die;
 ?>

	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container-fluid">
	    <!-- <div class="navbar-header"> -->
	      <h3 class="navbar-text pull-left"><a class="navbar-brand" href="/">My Blog</a></h3>
	      <h3 class="navbar-text pull-left"><a class="navbar-brand" href="/index.php?r=users/index">Chat</a></h3>
	      <ul class="nav navbar-nav ">

	        <?php if ( isset(Yii::app()->session['uid'] ) ) { ?>
	        	<li><a href="/index.php?r=posts/index">Welcome  <?= Yii::app()->session['username'] ?> </a> </li>
	        	<li><a href="/index.php?r=posts/create">	<i class="fa fa-edit fa-2x"></i> </a> </li>
	        	<li ><a href="/index.php?r=posts/index">  <i class="fa fa-user fa-2x"></i></a></li>
	        	<li ><a href="/index.php?r=site/logout"><i class="fa fa-sign-out fa-2x"></i></a></li>
	        <?php }  else { ?>  
		        <li ><a href="/index.php?r=site/login">Login</a></li>
		        <li ><a href="/index.php?r=users/create">Signup</a></li> 
	        <!-- <li ><a href="/index.php?r=site/signup">Signup</a></li>  -->
	       <?php }?>
	      </ul>
	    <!-- </div> -->
	   
	  </div>
	</nav>



	

	<?php echo $content; ?>

	<div class="clear"></div>







</body>
</html>
