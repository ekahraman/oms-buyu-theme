<?php if ($mobile) { ?>
    <div class="row">
        <nav class="navbar navbar-buyu-sidebar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="icon-uniE648 white-color-link sidebar-moon-icon-size sidebar-padding"></span>
                    <span class="white-color-link align-to-moon-icon-mobile">Öne Çıkan Dualar</span>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="icon-uniE8D1 white-color-link sidebar-list-align"></span><a href="#">TILSIMLI DUALAR</a></li>
                        <li class="list-group-item"><span class="icon-uniE8D1 white-color-link sidebar-list-align"></span><a href="#">AŞK DUALARI</a></li>
                        <li class="list-group-item"><span class="icon-uniE8D1 white-color-link sidebar-list-align"></span><a href="#">ÇEVİRGEL DUASI</a></li>
                        <li class="list-group-item"><span class="icon-uniE8D1 white-color-link sidebar-list-align"></span><a href="#">KISMET DUASI</a></li>
                        <li class="list-group-item"><span class="icon-uniE7CD white-color-link sidebar-list-align"></span><a href="#">Sıkıntı anında edilecek dualar</a></li>
                        <li class="list-group-item"><span class="icon-uniE7CD white-color-link sidebar-list-align"></span><a href="#">Üzüntülü iken okunacak dua</a></li>
                        <li class="list-group-item"><span class="icon-uniE7CD white-color-link sidebar-list-align"></span><a href="#">Sıkıntı anında okunacak dua?</a></li>
                        <li class="list-group-item"><span class="icon-uniE7CD white-color-link sidebar-list-align"></span><a href="#">Sınıf geçme için ilyas</a></li>
                      </ul>
                </div>
            </div>
        </nav>
<?php } else { ?>
    <div class="row">
      <div class="col-md-3 sidebar-align-fix">
        <div class="sidebar-wrapper">
            <div class="padding-10px white-color-link bold"> DUA ARAMA </div>
          <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Dua Adı Giriniz" />
                    <span class="input-group-btn white-bg">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
             <hr class="hr-seperator-sidebar"/>
             <ul class="list-group">
                 <li class="list-group-item"><span class="icon-uniE8D1 white-color-link sidebar-list-align"></span><a href="#">TILSIMLI DUALAR</a></li>
                 <li class="list-group-item"><span class="icon-uniE8D1 white-color-link sidebar-list-align"></span><a href="#">AŞK DUALARI</a></li>
                 <li class="list-group-item"><span class="icon-uniE8D1 white-color-link sidebar-list-align"></span><a href="#">ÇEVİRGEL DUASI</a></li>
                 <li class="list-group-item"><span class="icon-uniE8D1 white-color-link sidebar-list-align"></span><a href="#">KISMET DUASI</a></li>
             </ul>
              <hr class="hr-seperator-sidebar"/>
              <br/>
              <span class="icon-uniE648 white-color-link sidebar-moon-icon-size sidebar-padding"></span>
              <span class="white-color-link align-to-moon-icon">Öne Çıkan Dualar</span>

              <ul class="list-group">
                  <li class="list-group-item"><span class="icon-uniE7CD white-color-link sidebar-list-align"></span><a href="#">Sıkıntı anında edilecek dualar</a></li>
                  <li class="list-group-item"><span class="icon-uniE7CD white-color-link sidebar-list-align"></span><a href="#">Üzüntülü iken okunacak dua</a></li>
                  <li class="list-group-item"><span class="icon-uniE7CD white-color-link sidebar-list-align"></span><a href="#">Sıkıntı anında okunacak dua?</a></li>
                  <li class="list-group-item"><span class="icon-uniE7CD white-color-link sidebar-list-align"></span><a href="#">Sınıf geçme için ilyas</a></li>
                </ul>
            </div>
        </div>

<?php } ?>
