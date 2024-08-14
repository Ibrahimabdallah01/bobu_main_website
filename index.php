<!doctype html>
<html class="no-js" lang="en">
<?php include('./includes/header.php'); ?>

<body>

    <!-- page wrapper -->
    <div class="page-wrapper pbmit-bg-color-light" id="page">

        <!-- Header Main Area -->
        <header class="site-header header-style-1">
            <?php include('./includes/header_links.php'); ?>
            <?php
			if(empty($_GET)){
				include('./includes/header_slider.php');
			}else{
				//include('./includes/other_after_header.php');
			}
			?>

        </header>
        <!-- Header Main Area End Here -->

        <!-- Page Content -->
        <?php
		 if(empty($_GET)){
			include('./views/home.php');
		}

		if(isset($_GET['about-us'])){
			include('./views/about_us.php');
		}
		if(isset($_GET['our-history'])){
			include('./views/our-history.php');
		}
		if (isset($_GET['our_team_member'])) {
			include('./views/our_team_member.php');
		}
		if(isset($_GET['team_member_details'])) {
			include('./views/team_member_details.php');
		}
		if(isset($_GET['services'])) {
			include('./views/services.php');
		}
		if(isset($_GET['contact-us'])) {
			include('./views/contact-us.php');
		}
		if(isset($_GET['service-details'])) {
			include('./views/service-details.php');
		}
		?>
        <!-- Page Content End -->

        <!-- footer -->
        <?php include('./includes/footer.php') ?>
        <!-- footer End -->

    </div>
    <!-- page wrapper End -->

    <!-- Search Box Start Here -->
    <?php include('./includes/search_box.php') ?>
    <!-- Search Box End Here -->

    <!-- Scroll To Top -->
    <div class="pbmit-progress-wrap">
        <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Scroll To Top End -->

    <!-- JS
		============================================ -->
    <?php  include('./includes/scripts.php') ?>

</body>

</html>