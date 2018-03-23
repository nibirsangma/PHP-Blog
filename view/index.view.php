<?php include 'partial/header.php'?>

    <div class="container clearfix">
        <div class="row">
            <div class="col-8 mt-5 mb-5">
                <?php foreach ($posts as $post): ?>
                    <div class="Posts wow fadeInUp">
                        <h1><a href="/post/?id=<?= $post['id'];?>"><?= $post['title']; ?></a></h1>
                        <p><?= substr($post['data'], 0, 400); ?><a href="/post/?id=<?= $post['id'];?>"> Read more...</a></p>
                        <span>URI: <?= $post['uri']; ?></span>
                        <span class="float-right"><?= $post['time'];?></span>
                        <hr>
                    </div>

                <?php endforeach; ?>

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
<?php include 'partial/footer.php';