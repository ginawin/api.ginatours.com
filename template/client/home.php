<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 	initial-scale=1, shrink-to-fit=no">
	<base href="<?php echo BASE_URL?>">
    <!-- Font -->    
    <link href="<?php echo BASE_URL?>asset/common/font/awesome/css/fontawesome-all.min.css" rel="stylesheet" >

    <!-- Bootstrap CSS -->
    <link href="<?php echo BASE_URL?>asset/common/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <!-- Reset CSS -->
	<link href="<?php echo BASE_URL?>asset/common/css/normalize.css" rel="stylesheet">
    <!-- Animate  -->
    <link href="<?php echo BASE_URL?>asset/common/css/animate.css" rel="stylesheet">
    <!-- jQuery-ui-->
	<link href="<?php echo BASE_URL?>asset/common/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <!-- Common Style -->
    <link href="<?php echo BASE_URL?>asset/common/css/style.css" rel="stylesheet">
    <!-- My Style -->
	<link href="<?php echo BASE_URL?>asset/client/css/style.css" rel="stylesheet">
    <!-- JS -->
	<script src="<?php echo BASE_URL?>asset/common/js/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?php echo BASE_URL?>asset/common/img/favicon.ico"/>
    <link rel="fav" href="">
    <title>Client</title>
</head>
<body>
	<!-- Header -->
        <header>
            <?php 
                include_once('header.php');
            ?>
        </header>
    <!-- End Header -->
    <!-- Content -->
        <div class="content-page">
            <?php 
                include_once('message.php');
            ?>
            <?php echo $content;?>
        </div>  
    <!-- End Content -->
    <!-- Footer -->
        <footer>
            <?php 
                include_once('footer.php');
            ?>
        </footer>
    <!-- End footer -->
</body>
<script src="<?php echo BASE_URL?>asset/common/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL?>asset/common/plugins/jquery-ui/jquery-ui.min.js"></script>
</html>
