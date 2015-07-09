

<div class="container">


    <div class="row-fluid">
        <div class="col-md-8 col-xs-8">
                

            <?php  
                    
                    foreach($dataProvider->getData() as $record){

                        ?>
                        <hr>

                        <div class="post">

                            <div class="post-date">  
                                <?= $record->created_at ?>
                            </div>


                            <div class="post-title">
                                <h1><a href="/index.php?r=posts/view&id=<?=$record->id?>" > <?= $record->title ?></a></h1>
                            </div>


                            <div class="post-content">
                                <?= $record->content ?>
                            </div>


                            <div class="likes">
                                <p class="info pull-right">comments (<?= count($record->comments)  ?>)</p>
                               
                            </div>
                        </div>




                    <?php
                    }

            ?>

            
          



        </div>
        <div class="col-md-4 col-xs-4">
                
        </div>
     </div>

</div>