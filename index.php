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
    </body>
</html>
