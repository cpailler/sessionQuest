<?php
require 'connectionCheck.php';
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
      <?php
        foreach ($_SESSION['items'] as $item){
            echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <figure class="thumbnail text-center">
                <img src="'.$item['img'].'" alt="cookies choclate chips" class="img-responsive">
                  <h3>'.$item['num'].'</h3>
              </figure>
            </div>';
        }
      ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
