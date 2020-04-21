<header class="main-header">
    <!--Header Top-->
    <div class="header-top top_bar">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="la la-phone"></i> +90 212 255 33 55</li>
                        <li><i class="la la-envelope-o"></i><a href="mailto:info@projesatis.com">info@projesatis.com</a>
                        </li>
                        <li><a href="https://www.facebook.com/TekceProjeSatis/" target="_blank" class="facebook"><span
                                    class="fab fa-facebook-f"></span></a></li>
                        <li><a href="https://www.linkedin.com/company/proje-satis-as" target="_blank"
                               class="linkedin"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>
                </div>
                <div class="top-right">
                    <div class="d-flex topbar_content justify-content-between">
                        <div class="top_bar--lang align-self-center order-2">
                            <div class="dropdown">
                                <div class="dropdown-toggle d-flex align-items-center" id="dropdownMenuButton1"
                                     role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="lang">tr</span>
                                    <img class="lang_flag" src="<?= $cdn ?>images/tr.jpg" alt="English">
                                    <span class="la la-angle-down"></span>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" data-lang="tr" href="#"><img src="<?= $cdn ?>images/tr.jpg"
                                                                                          alt="">Türkçe</a>
                                    <a class="dropdown-item" data-lang="en" href="#"><img src="<?= $cdn ?>images/en.jpg"
                                                                                          alt="">English</a>
                                    <a class="dropdown-item" data-lang="fr" href="#"><img src="<?= $cdn ?>images/fr.jpg"
                                                                                          alt="">Arabic</a>
                                </div>
                            </div>
                        </div>
                        <div class="top_bar--login">
                            <ul>
                                <li><a href="#"><span class="la la-sign-in"></span>Sign Up</a></li>
                                <li><a href="#"><span class="la la-user"></span>Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="main-box">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="<?= base_url() ?>"><img src="<?= $cdn ?>images/proje-satis-logo.png"
                                                                           alt="Proje Satış A.Ş. Logo"
                                                                           title="Proje Satış A.Ş. Logo"></a></div>
                    </div>

                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="la la-bars"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="<?= base_url() ?>">Anasayfa</a></li>
                                    <li><a href="<?= base_url() ?>hakkimizda">Hakkımızda</a></li>
                                    <li class="dropdown"><a
                                            href="<?= base_url() ?>satis-ekibi-destegi">Uzmanlığımız</a>
                                        <ul>
                                            <li><a href="<?= base_url() ?>satis-ekibi-destegi">Satış Ekibi Desteği</a>
                                            </li>
                                            <li><a href="<?= base_url() ?>acenta-iliskileri-yonetimi">Acenta İlişkileri
                                                    Yönetimi</a></li>
                                            <li><a href="<?= base_url() ?>satis-egitimleri">Satış Eğitimleri</a></li>
                                            <li><a href="<?= base_url() ?>pazarlama-destegi">Pazarlama Desteği</a></li>
                                            <li><a href="<?= base_url() ?>raporlama">Raporlama</a></li>
                                            <li><a href="<?= base_url() ?>lead-yonetimi">Lead Yönetimi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url() ?>projelerimiz">Projelerimiz</a></li>
                                    <li><a href="<?= base_url() ?>kariyer">Kariyer</a></li>
                                    <li><a href="<?= base_url() ?>iletisim">İletişim</a></li>
                                </ul>
                            </div>

                        </nav><!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <!--Search Box-->
                            <div class="nav_right_content d-flex align-items-center order-2 order-sm-2">
                                <div class="nav_right_module search_module">
                                    <span class="la la-search search_trigger"></span>
                                    <div class="search_area">
                                        <form action="<?= base_url() ?>/">
                                            <div class="input-group input-group-light">
                                                    <span class="icon-left">
                                                        <i class="la la-search"></i>
                                                    </span>
                                                <input type="text" class="form-control search_field"
                                                       placeholder="Type words and hit enter...">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index" title="Proje Satış A.Ş."><img src="<?= $cdn ?>images/proje-satis-logo-small.png"
                                                              alt="Proje Satış A.Ş. Logo" title="Proje Satış A.Ş. Logo"></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="<?= base_url() ?>/">Anasayfa</a></li>
                            <li><a href="<?= base_url() ?>/hakkimizda">Hakkımızda</a></li>
                            <li class="dropdown"><a href="<?= base_url() ?>/satis-ekibi-destegi">Uzmanlığımız</a>
                                <ul>
                                    <li><a href="<?= base_url() ?>/satis-ekibi-destegi">Satış Ekibi Desteği</a></li>
                                    <li><a href="<?= base_url() ?>/acenta-iliskileri-yonetimi">Acenta İlişkileri
                                            Yönetimi</a></li>
                                    <li><a href="<?= base_url() ?>/satis-egitimleri">Satış Eğitimleri</a></li>
                                    <li><a href="<?= base_url() ?>/pazarlama-destegi">Pazarlama Desteği</a></li>
                                    <li><a href="<?= base_url() ?>/raporlama">Raporlama</a></li>
                                    <li><a href="<?= base_url() ?>/lead-yonetimi">Lead Yönetimi</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url() ?>/projelerimiz">Projelerimiz</a></li>
                            <li><a href="<?= base_url() ?>/kariyer">Kariyer</a></li>
                            <li><a href="<?= base_url() ?>/iletisim">İletişim</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
<!--End Main Header -->