<?php
?>

<header class="header">
    <?php include("topbar.php"); ?>
    <?php include("nav.php"); ?>
    <div class="subheader py-5" style="background-image: url('assets/images/<?php loadSubheader($request); ?>');">    
        <div class="container">
            <div class="row">
                <div class="col-12 subheader__content">
                    <span class="subheader__title"><?php echo $title; ?></span>
                    <p class="subheader__breadcrumbs"><a href="/">Strona główna</a> / <?php echo $title; ?></p>
                </div>
            </div>
        </div>
    </div>
</header>

<?php
?>