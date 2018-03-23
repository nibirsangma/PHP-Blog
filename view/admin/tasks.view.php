<?php include dirname(__FILE__). '/../partial/admin/header.php'; ?>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tasks</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Tasks</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($allTasks as $i => $task): ?>
                    <tr>
                        <td><?= ($i+1); ?></td>
                        <td><?= $task['description']; ?></td>
                        <td>
                            <a href="#" class="btn btn-outline-info btn-sm">view</a>
                            <a href="/admin/task-edit/?id=<?= $task['id']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                            <a href="/delete/task/?id=<?= $task['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<?php include dirname(__FILE__). '/../partial/admin/footer.php'; ?>

