<?php require_once('partials/header.php'); ?>
<?php require_once('partials/topbar.php'); ?>

<div id="container">

    <div id="sidebar_left"> 
        <?php require_once('partials/sidebar_left.php'); ?> 
    </div>

    <div id="content_middle">
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