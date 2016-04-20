<div class="col-md-8 col-md-offset-2">
    <div class="panel login-panel panel-default">
        <div class="panel-body">
            <h3 id="searchH3">Searched Results</h3>
            <table align="center">
                <?php
                if(empty($searchedRes)){?>
                    
                
                    <tr>
                        <td><?php echo "NO RESULTS";?></td>
                    <tr>
                <?php }else{ ?>
                    <tr>
                        <td></td>
                        <td>COVER</td>
                        <td>TITLE</td>		
                        <td>AUTHOR</td>
                        <td>PAGES</td>
                        <td>ISBN</td>
                        <td>DATE OF PUBLISHING</td>
                        <td>FORMAT</td>
                        <td>RESUME</td>
                    </tr>
                <?php 
                    
                    $i=1;
                    foreach($searchedRes as $book){?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><img height="50" width="50" src="<?php echo base_url();?>assets/images/<?php echo $book['image'];?>"/></td>
                        <td><?php echo $book['title'];?></td>
                        <td><?php echo $book['author'];?></td>
                        <td><?php echo $book['pages'];?></td>
                        <td><?php echo $book['isbn'];?></td>
                        <td><?php echo $book['publish_date'];?></td>
                        <td><?php echo $book['format'];?></td>
                        <td><?php echo $book['resume'];?></td>
                    </tr>
                    <?php $i++;} ?>
                <?php } ?>
                
                </table>
            <button id="backToSee" class="btn btn-primary" type="button">Back</button>
        </div>
    </div>
</div>