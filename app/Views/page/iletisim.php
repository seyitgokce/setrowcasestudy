<section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
    <div class="bg_image_holder">
        <img src="<?= $cdn ?>images/bg/contact-bg.jpg" alt="Proje Satış Hakkımızda">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                    <h1 class="page_title">İletişim</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-bottom-30">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div><!-- ends: .row -->
    </div>
</section><!-- ends: .breadcrumb_area -->

<section class="contact-split d-flex align-items-center">
    <div class="g-maps">

        <div class="map" id="map2"></div><!-- end: .map -->

        <div class="map-top">
            <ul class="icon-list--three">
                </li>
                <div class="contents">
                    <h6>Genel Merkez</h6>
                </div>
                </li>
                <li class="icon-list2 d-flex">
                    <div class="icon"><i class="la la-envelope"></i></div>
                    <div class="contents">
                        <h6>info@projesatis.com</h6>
                    </div>
                </li>
                <li class="icon-list2 d-flex">
                    <div class="icon"><i class="la la-phone"></i></div>
                    <div class="contents">
                        <h6>+90 212 255 33 55</h6>
                    </div>
                </li>
                <li class="icon-list2 d-flex">
                    <div class="icon"><i class="la la-map-marker"></i></div>
                    <div class="contents">
                        <h6>Yedikule Çırpıcı Yolu Sk. No:2<br> Avrupa Ofis 12<br> Cevizlibağ 34010</h6>
                        <span class="sub-text">Zeytinburnu, İstanbul Türkiye</span>
                    </div>
                </li>
            </ul><!-- ends .iconListThree -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-7">
                <div class="form-wrapper">
                    <div class="m-bottom-10">
                        <div class="divider divider-simple text-left">
                            <h3>Bize Ulaşın</h3>
                        </div>
                    </div>
                    <p class="m-bottom-30">Bizimle iletişime geçmek için aşağıdaki ileitşim formunu doldurmanız yeterlidir.</p>
                    <form action="<?= base_url() ?>iletisim" method="post">
                        <input type="text" class="form-control form-outline mb-4" name="name" placeholder="İsim ve Soyadınız" required>
                        <input type="email" class="form-control form-outline mb-4" name="email" placeholder="Email Adresiniz" required>
                        <textarea class="form-control form-outline mb-4" name="message" placeholder="Mesajınız" required></textarea>
                        <button class="btn btn-primary">Gönder</button>
                    </form>
                </div><!-- end: .form-wrapper -->
            </div>
        </div>
    </div>
</section><!-- ends: .address-blocks -->


