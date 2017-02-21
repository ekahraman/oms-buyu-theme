<?php include ("header.php");?>
        <div class="container top-margin-before-slider">
            <?php include ("left-sidebar.php");?>
            <?php include ("middle-content.php"); ?>
            </div><!-- ================================================ End Row that begins in left-sidebar.php ========================== -->
            <?php if ($mobile) {
                include ("comment-slider.php");
                include ("ruya-tabir-okunacak-dualar.php");
            } else {
                include ("ruya-tabir-okunacak-dualar.php");
                include ("comment-slider.php");
            }?>

        </div>
        <?php include("footer.php"); ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="dist/js/bootstrap.min.js"></script>
    </body>
</html>
