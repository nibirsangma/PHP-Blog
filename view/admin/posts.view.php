<?php include dirname(__FILE__). '/../partial/admin/header.php'; ?>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> All Posts &nbsp;
        <a href="/admin/post-insert/" class="btn btn-outline-success btn-sm">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach ($allPosts as $i => $post): ?>
                    <tr>
                        <td><?= ($i+1); ?></td>
                        <td><?= $post['title']; ?></td>
                        <td><?= $post['uri']; ?></td>
                        <td><?= $post['time']; ?></td>
                        <td>
                            <a href="#" class="btn btn-outline-info btn-sm">view</a>
                            <a href="/admin/post-edit/?id=<?= $post['id']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                            <a href="/delete/post/?id=<?= $post['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<?php include dirname(__FILE__). '/../partial/admin/footer.php';?>
