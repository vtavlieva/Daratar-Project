<div class="col-md-4 col-md-offset-4">
    <div class="panel login-panel panel-default">
        <div class="panel-body">
            <form id="add-form" action="<?php echo base_url(); ?>index.php/Add/addToLibrary" method="post" enctype="multipart/form-data">
                <h3 style="padding-left: 10px;"class="col-md-offset-2">FILL UP THE FIELDS</h3>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" name="title" id="title" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Author" name="author" id="author" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pages" name="pages" id="pages" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ISBN" name="isbn" id="isbn"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control date-input" id="expiry_date" name="publish_date" placeholder="Publish Date" />
                </div>
                <div class="form-group">
                    <select id="format" name="format" class="form-control">
                        <option disabled selected>Select Format</option>
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                        <option value="A5">A5</option>
                    </select>
                </div>
                <div>
                    <textarea rows="2" class="form-control" id="resume"name="resume" placeholder="Description"></textarea>
                </div>
                <br>
                <div>
                    <input type="file" name="image" class="form-control" id="image" value="upload">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" id="btnAdd" class="form-control btn btn-default" value="ADD THE BOOK TO LIBRARY">
                </div>
            </form>
            <button id="back" class="btn btn-primary" type="button">Back</button>
        </div>
    </div>
</div>

