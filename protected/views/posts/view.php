

<div class="container">


	<div class="row-fluid">
        <div class="col-md-8 col-xs-8">
                
            <div class="post">

                            <div class="post-date">  
                                <?= $model->created_at ?>
                            </div>


                            <div class="post-title">
                                <h1><a href="/index.php?r=posts/view&id=<?=$model->id?>" > <?= $model->title ?></a></h1>
                            </div>


                            <div class="post-content">
                                <?= $model->content ?>
                            </div>


                            <div class="likes">
                                <p class="info pull-right" >comments (<?= count($model->comments)  ?>)</p>
                               
                            </div>
                        
            </div>
            <hr>

            <?php  
                   //for comments gathering 
                    foreach($dataProvider->getData() as $record){

                        ?>
                            
                        <div class="comment">

                            <div class="comment-author">  
                                <?= $record->author ?>
                            </div>

                             <div class="comment-date">  
                                <?= $record->created_at ?>
                            </div>

                            <div class="comment-content">
                               <?= $record->content ?>
                            </div>
                            
                        </div>

                    <?php
                    }

            ?>




            <div class="comment-field">
                <h1> Leave a Reply </h1>
                <?php echo $this->renderPartial('../comments/_form', array('model'=>Comments::model(), 'post'=>$model ) ); ?>

            </div>
           



        </div>
        <div class="col-md-4 col-xs-4">
                
        </div>
     </div>

</div>