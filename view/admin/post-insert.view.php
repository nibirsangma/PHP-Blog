<?php include dirname(__FILE__). '/../partial/admin/header.php'; ?>
    <h1 class="inser-post">Add New Post</h1>
    <hr>
    <div class="form">
        <form action="/posts/" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title" required>
            </div>
            <div class="form-group">
                <textarea name="data" class="form-control" rows="5" placeholder="Post Here" required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="author" class="form-control" placeholder="Author">
                </div>
                <div class="form-group col-md-6">
                    <!--                                        <input type='text' class="form-control" name="time" placeholder="Date and Time" value="" id='datetimepicker4' required/>-->
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php include dirname(__FILE__). '/../partial/admin/footer.php'; ?>