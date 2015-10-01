<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>THE GAME</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/pimpmycss.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
            <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
            <?php
                    include "navbar.php";
            ?>
        <div class="container">
            <?php
                if (ISSET($_REQUEST["field_messages"]["warning"]))
                {
            ?>
            <div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Attention!</strong> <?php echo $_REQUEST["field_messages"]["warning"]?>
            </div>
            <?php
                }
            ?>
            <?php
                if (ISSET($_REQUEST["field_messages"]["error"]))
                {
            ?>
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Erreur!</strong> <?php echo $_REQUEST["field_messages"]["error"]?>
            </div>
            <?php
                }
            ?>
            <?php
                if (ISSET($_REQUEST["field_messages"]["success"]))
                {
            ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Bravo!</strong> <?php echo $_REQUEST["field_messages"]["success"]?>
            </div>
            <?php
                }
            ?>
        </div>
    </body>

</html>