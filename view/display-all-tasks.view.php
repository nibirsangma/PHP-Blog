<?php require 'partial/header.php'?>
    <div class="container">
        <div class="row">
            <div class="col-8 mt-5 mb-5">
                <h1>All Tasks</h1>
                <div class="card">
                    <ul class="list-group">
                        <?php foreach ($allTasks as $task): ?>

                            <li class="list-group-item <?php echo(($task['status'])? 'list-group-item-success':'border-danger'); ?> "><?php echo $task['description'];?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="">
                    <form class="">
                        <input class="form-control" type="search" placeholder="Search">
                    </form>
                </div>
                <div class="calendar">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
<?php require 'partial/footer.php';