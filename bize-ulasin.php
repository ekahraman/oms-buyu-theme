<?php include ("header.php");?>

<?php
    if ($mobile) {
        $padding_class      = "padding-left-10";
        $icon_moon_span     = "align-to-moon-icon-mobile";
        $comment_info_class = "aling-to-logo-first-div2";
    } else {
        $padding_class      = "padding-10px";
        $icon_moon_span     = "align-to-moon-icon";
        $comment_info_class = "aling-to-logo-first-div";
    }
 ?>


<div class="container top-margin-before-slider background-color-white">
    <div class="row">
        <div class="col-md-12 ">
            <div class="theme-background-color margin20-top <?=$padding_class?>">
                <span class="icon-uniE70A sidebar-moon-icon-size middle-content-padding white-color-link"></span>
                <span class="<?=$icon_moon_span?> white-color-link">BİZE YAZIN</span>
            </div><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 middle-content-seperator">
            <div class="theme-font-color bold">Hocamız Hakkında</div>
            <form class="form-inline margin-top-15px">
                <div class="form-group col-md-6">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
                        <input type="text" class="form-control align-input" id="" placeholder="Adı Soyadı" style="border-left:0 !important;">
                    </div>
                </div>
                <div class="form-group pull-right col-md-6">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></div>
                        <input type="text" class="form-control align-input" id="" placeholder="E-Posta Adresi" style="border-left:0 !important;">
                    </div>
                </div>
                <div class="row">&nbsp;</div>
                <div class="form-group col-md-12">
                    <textarea class="form-control" style="min-width: 100%" rows="8"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="button" class="btn btn-theme pull-right margin-top-15px margin-bottom-15px">Gönder</button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12 align-according-to-image">
                    <div class="mini-box">
                        <span class="icon-uniE6CD big-font dark-white-font"></span>
                        <div class="dark-white-font font-13px <?=$comment_info_class?>">HER DERDE DEVA HEMEN ARAYIN!</div>
                        <div class="bold aling-to-logo-second-div">0541 767 38 37</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-according-to-image">
                    <div class="mini-box">
                        <i class="fa fa-whatsapp fa-4x dark-white-font" aria-hidden="true"></i>
                        <div class="dark-white-font font-13px aling-to-logo-first-div">WHATSAPP İLE ANINDA BİZE ULAŞIN!</div>
                        <div class="bold top-align-table aling-to-logo-second-div">0541 767 38 37</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-according-to-image">
                    <div class="mini-box">
                        <span class="icon-uniE90B big-font dark-white-font"></span>
                        <div class="dark-white-font font-13px <?=$comment_info_class?>">BİZE MAİL İLE DE ULAŞABİLİRSİNİZ</div>
                        <div class="bold aling-to-logo-second-div smaller-font">iletişim@medyumsuleymanhoca.com</div>
                    </div>
                </div>
            </div>
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mini-box">
                        <span class="dark-white-font font-13px">SOSYAL AĞLAR</span>
                            <span class="top-social-icons">
                                <span class="icon-uniE949 align-icons moon-icon-font-size"></span>
                                <span class="icon-uniE948 moon-icon-font-size"></span>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
