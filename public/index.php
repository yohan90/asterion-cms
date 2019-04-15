<?php require_once('partials/header.php'); ?>
<?php require_once('partials/topbar.php'); ?>

<div id="container">

    <div id="content_left"> 
        <?php require_once('partials/sidebar.php'); ?> 
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

    <div id="content_right"></div>

</div>

<?php require_once('partials/footer.php'); ?>

<!--
    donc la, tout est séparé. mais faut faire le systeme pour les pages