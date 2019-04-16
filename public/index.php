<?php require_once('partials/header.php'); ?>
<?php require_once('partials/topbar.php'); ?>

<div id="container">

    <div id="sidebar_left"> 
        <?php require_once('partials/sidebar_left.php'); ?> 
    </div>

    <div id="content_middle">
        <div class="slider">
            <img src="template/img/slider/4.png" alt="">
                <div class="box-btn">
                    <i class="btn"></i>
                    <i class="btn"></i>
                    <i class="btn"></i>
                    <i class="btn"></i>
                    <i class="btn"></i>
                </div>
        </div>
        <?php   

            $page = 'index';
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            }

            require_once("pages/{$page}.php");
        ?>
    </div>

    <div id="sidebar_right">
<?php require_once('partials/sidebar_right.php'); ?>
    </div>

</div>

<?php require_once('partials/footer.php'); ?>