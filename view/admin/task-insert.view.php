<?php include dirname(__FILE__). '/../partial/admin/header.php'; ?>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Task Add
    </div>
    <div class="card-body">
        <form action="/tasks/" method="post">
            <div class="form-group">
                <label for="task" hidden>Task</label>
                <input type="text" class="form-control" id="task" name="description" placeholder="Descriptions">
            </div>
            <div class="form-group">
                <label for="status" hidden>Status</label>
                <select class="form-control" name="status" id="status">
                    <option>...</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<?php include dirname(__FILE__). '/../partial/admin/footer.php'; ?>
