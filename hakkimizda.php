<?php include ("header.php");?>

<?php
    if ($mobile) {
        $padding_class  = "padding-left-10";
        $icon_moon_span = "align-to-moon-icon-mobile";
    } else {
        $padding_class  = "padding-10px";
        $icon_moon_span = "align-to-moon-icon";
    }
 ?>


<div class="container top-margin-before-slider background-color-white">
    <div class="row">
        <div class="col-md-12 ">
            <div class="theme-background-color margin20-top <?=$padding_class?>">
                <span class="icon-uniE726 sidebar-moon-icon-size middle-content-padding white-color-link"></span>
                <span class="<?=$icon_moon_span?> white-color-link">HAKKIMIZDA</span>
            </div><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 middle-content-seperator">
            <div class="theme-font-color bold">Hocamız Hakkında</div>
            <hr class="margin-top-15px margin-bottom-15px">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac velit quis felis lobortis tristique sed eu arcu. Aliquam non elit nec diam sollicitudin euismod et nec eros. Donec ultrices sagittis efficitur. Nunc non augue sed ante varius bibendum nec a ex. Vivamus aliquam hendrerit enim, vel feugiat sem vestibulum sollicitudin. Nulla gravida lorem et magna aliquam, ac euismod dolor porta. Donec sit amet quam arcu. Vestibulum ut tincidunt tortor. Duis pulvinar massa quis lacus pulvinar, quis aliquet leo ultricies. Etiam tincidunt augue in nunc imperdiet luctus. Vivamus nec bibendum orci. Proin venenatis hendrerit tempus. Etiam est neque, eleifend in placerat non, porta et est. Curabitur ac mi sit amet tortor luctus dictum eget in neque. Sed ac eros scelerisque, condimentum nibh nec, scelerisque neque.
            </p>
            <p>
            Donec tristique dolor id mollis euismod. Vivamus eget aliquam leo. Donec volutpat, dui vel suscipit auctor, urna enim fringilla nibh, ac hendrerit ex mi in nisl. Aliquam ultricies varius dui, eu tempus nunc varius at. Morbi lorem neque, dapibus et est ac, elementum malesuada neque. Nam pharetra dolor sit amet nunc tempus, non suscipit massa dapibus. Nullam eu vestibulum nisl. Nam dictum purus sed vestibulum iaculis. Vivamus purus diam, viverra vitae sollicitudin a, feugiat eu diam. Vivamus pretium, ipsum eu ornare ultricies, enim odio bibendum sem, sed luctus neque ex eu libero. Praesent convallis eu tellus sit amet lacinia.
            </p>
            <p>
            Vestibulum pellentesque sapien sed aliquam ornare. Sed at lorem id turpis facilisis fermentum a ut metus. Suspendisse venenatis lacus vitae hendrerit aliquam. Etiam fermentum, ipsum vitae ornare tincidunt, eros dui tristique sapien, vel blandit felis urna et leo. Etiam vel magna ac augue volutpat mollis vel et massa. Proin consequat fermentum orci eu blandit. Donec viverra dolor non augue congue laoreet. Maecenas faucibus elit et neque molestie, et maximus mauris aliquet. Phasellus laoreet cursus odio sit amet facilisis. Cras mollis sem in massa finibus, quis fermentum lorem venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam vitae auctor dolor.
            </p>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
