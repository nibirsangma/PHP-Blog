<?php include dirname(__FILE__). '/../partial/admin/header.php'; ?>
    <h1 class="inser-post">Post Edit and Update</h1>
    <hr>
    <div class="form">
        <form action="/admin/post/update/" method="post">
            <input type="hidden" name="id" value="<?= $editPost['id']; ?>">
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="<?= $editPost['title']; ?>" required>
            </div>
            <div class="form-group">
                <textarea name="data" class="form-control" rows="10" placeholder="Post Here" required><?= $editPost['data']; ?></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="author" class="form-control" value="<?= $editPost['uri']; ?>" placeholder="Author">
                </div>
                <div class="form-group col-md-6">
                    <!--                                        <input type='text' class="form-control" name="time" placeholder="Date and Time" value="" id='datetimepicker4' required/>-->
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

<?php include dirname(__FILE__). '/../partial/admin/footer.php'; ?>