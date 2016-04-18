<div class="col-md-4 col-md-offset-4">
    <div class="panel login-panel panel-default">
        <div class="panel-body"> 
            <form id="add-form">
                <table align="center">
                    <tr>
                        <td></td>
                        <td>TITLE</td>		
                        <td>AUTHOR</td>
                        <td>DELETE</td>
                    </tr>
                <?php
                $i=1;
                  foreach($books as $book) { ?>
                    <tr>
                        <td><?php echo $book['id'];?></td>
                        <td><?php echo $book['title'];?></td>
                        <td><?php echo $book['author'];?></td>
                        <td><button type="button" id="<?php echo $book['id'];?>" class="id form-control btn btn-default">Delete</button></td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
            <?php echo "<span id='pagination'>".$this->pagination->create_links()."</span>"; ?>
            <br>
            <button id="back" class="btn btn-primary" type="button">Back</button>
        </div>
    </div>
</div>

