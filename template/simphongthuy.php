<?php $data["title"] = "Sim phong thuỷ"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Tìm sim',
        'link' => 'timsim.php',
    ),
    array(
        'txt' => 'Giỏ hàng',
        'link' => 'cart.php',
    ),
    array(
        'txt' => 'Sim phong thuỷ',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall phongthuysim__section">
    <div class="uk-container">
        <!--phongthuysim__item-->
        <div class="phongthuysim__item">
            <h1 class="uk-h1 phongthuysim__title">Phong thuỷ SIM 0586.779.<span>666</span></h1>
            <div class="phongthuysim__desc">Ngũ hành dãy số: <span>MỘC</span></div>
        </div>
        <!--/phongthuysim__item-->

        <!--phongthuysim__item-->
        <div class="phongthuysim__item">
            <div class="phongthuysim__card">
                <div class="uk-flex-middle uk-grid-10 uk-grid-256-m" uk-grid>
                    <div class="uk-width-auto@m">
                        <div class="phongthuysim__card__txt"><span class="phongthuysim__card__txt1"><span class="phongthuysim__card__txt2">9.5</span>/10</span> Điểm</div>
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-h4 phongthuysim__card__title">Số này rất đẹp chúc mừng bạn!</h4>
                        <p class="phongthuysim__card__desc">Sim tốt cho công danh sự nghiệp Sim kích tài vận Sim tốt cho gia đạo tình duyên</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/phongthuysim__item-->

        <!--phongthuysim__item-->
        <div class="phongthuysim__item">
            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <ul class="uk-tab-left lienhe__tab" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                        <li class="lienhe__tab__li"><a class="lienhe__tab__a" href="#">Âm dương tương phối</a></li>
                        <li class="lienhe__tab__li"><a class="lienhe__tab__a" href="#">Ngũ hành bản mệnh</a></li>

                        <li class="lienhe__tab__li"><a class="lienhe__tab__a" href="#">Cửu tinh đồ pháp</a></li>
                        <li class="lienhe__tab__li"><a class="lienhe__tab__a" href="#">Hành quẻ bát quái</a></li>
                        <li class="lienhe__tab__li"><a class="lienhe__tab__a" href="#">Quan niệm dân gian</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand@m">
                    <ul id="component-tab-left" class="uk-switcher">
                        <li>
                            <div class="phongthuysim__item">
                                <div class="phongthuysim__item1">
                                    <p class="phongthuysim__item1__desc"><span>Thân chủ:</span> Nam sinh vào ngày 6/6/1986</p>
                                    <p class="phongthuysim__item1__desc"><span>Âm lịch:</span> 29/4/1986</p>
                                    <p class="phongthuysim__item1__desc"><span>Theo Can chi:</span> Ngày Tân Tỵ tháng Quý Tỵ năm Bính Dần</p>
                                    <p class="phongthuysim__item1__desc"><span>Ngũ hành:</span> Lư trung hỏa, Mạng Lư Trung Hoả, xương con cọp, tướng tinh con chim trĩ, khắc Kiếm Phong Kim, con nhà Xích Ðế-cô bần</p>
                                    <p class="phongthuysim__item1__desc"><span>Số lượng chỉ:</span> 4 lượng 7 chỉ. Số này tính ra vượng về lúc tuổi già, vợ con phú quí, vì nguyên có cái phước sẵn như nước chảy lại.</p>
                                </div>
                                <div class="phongthuysim__item1">
                                    <h5 class="uk-h5 phongthuysim__item1__title">1.1. Dãy số 1 điểm</h5>
                                    <ul class="uk-list uk-list-circle phongthuysim__item1__list">
                                        <li>Có 6 số mang vận âm, chiếm 60 %</li>
                                        <li>Có 4 số mang vận dương, chiếm 40 %</li>
                                        <li>Số lượng số mang vận âm và dương phù hợp tỉ lệ cân bằng, rất tốt.</li>
                                    </ul>
                                </div>
                                <div class="phongthuysim__item1">
                                    <h5 class="uk-h5 phongthuysim__item1__title">1.2. Vượng 1 điểm</h5>
                                    <p class="phongthuysim__item1__desc">Thân chủ sinh năm Bính Dần, thuộc tuổi Dương Nam. Dãy số Vượng Âm nên rất tốt với tính Vượng Dương của bạn.</p>
                                </div>
                            </div>
                            <div class="phongthuysim__item">
                                <a href="thanhtoan.php" class="uk-button uk-button-secondary header__bottom__btn header__bottom__btn--login" aria-expanded="false">Đặt mua SIM</a>
                            </div>
                        </li>
                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/phongthuysim__item-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>