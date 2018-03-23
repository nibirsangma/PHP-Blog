<?php require 'partial/header.php'?>
    <div class="container">
        <div class="row">
            <div class="col-8 mt-5 mb-5">
                    <div class="Posts">
                        <h1><?= $post['title']; ?></h1>
                        <p><?= $post['data']; ?></p>
                        <span>URI: <?= $post['uri']; ?></span>
                        <span class="float-right"><?= $post['time']; ?></span>
                    </div>
                    <hr>
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
