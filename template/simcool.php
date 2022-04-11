<?php $data["title"] = "SIM COOL"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1440:423; min-height: 240; animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img class="uk-visible@m" src="images/banner1.png" alt="" uk-cover>
            <img class="uk-hidden@m" src="images/Group4185.png" alt="" uk-cover>
        </li>
        <li>
            <img src="images/photo.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--/Slider-->

<div class="uk-section-small goicuoc__section">
    <div class="uk-container uk-padding-remove home__sanpham__margin">
        <div class="home__sanpham__overFlow uk-child-width-1-5@m uk-grid-16 uk-grid-match uk-flex-nowrap" uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)" uk-grid>
            <?php
            $data = array(
                array(
                    'txt' => 'cool',
                    'desc' => 'Sim Đẹp - Giá rẻ - Data Khủng',
                ),
                array(
                    'txt' => 'biz',
                    'desc' => 'Bạn đồng hành của nhà kinh doanh',
                ),
                array(
                    'txt' => 'vip',
                    'desc' => 'Sim dành cho giới TINH HOA',
                ),
                array(
                    'txt' => 'luck',
                    'desc' => 'Thay Sim Đổi Vận',
                ),
                array(
                    'txt' => 'pal',
                    'desc' => 'Yêu thương kết nối bằng Sim số',
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div class="home__sanpham__column">
                <div class="home__sanpham__card uk-card <?= $v['txt'] ?>">
                    <div class="uk-card-body home__sanpham__body">
                        <h3 class="uk-h3 home__sanpham__title">sim <span><?= $v['txt'] ?></span></h3>
                        <p class="home__sanpham__desc"><?= $v['desc'] ?></p>
                    </div>
                    <div class="uk-card-footer home__sanpham__footer">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true;autoplay-interval:10000;">

                            <ul class="uk-slider-items uk-child-width-1-1">
                                <?php for ($i=0;$i<=2;$i++): ?>
                                <li>
                                    <div class="home__sanpham__number">0586.779.666</div>
                                </li>
                                <?php endfor; ?>
                            </ul>

                            <a class="uk-position-center-left uk-position-small home__sanpham__icon home__sanpham__icon--prev" href="#" uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small home__sanpham__icon home__sanpham__icon--next" href="#" uk-slider-item="next"></a>

                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="uk-container">
        <div class="uk-section-small simcool__section">
            <h2 class="uk-h2 profile__content__title uk-text-center">Sản phẩm của chúng tôi</h2>
            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <?php require "template-parts/layouts/sidebar.php"; ?>
                </div>
                <div class="uk-width-expand">
                    <div class="simcool__item">
                        <div class="uk-cover-container simcool__coverImg">
                            <img src="images/Group3785.png" alt="" uk-cover>
                            <canvas width="831" height="600"></canvas>
                        </div>
                    </div>
                    <div class="simcool__item">
                        <h4 class="uk-h4 simcool__title">Giới thiệu sản phẩm</h4>
                        <div class="simcool__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisl turpis. Aliquam ultrices eu quam in imperdiet. Maecenas scelerisque turpis at tempus tempor. Donec aliquet mattis faucibus. Morbi ligula diam, vehicula eu mollis vel, interdum ut neque. Praesent rutrum vitae dolor sit ...Xem thêm</div>
                    </div>
                    <div class="simcool__item">
                        <h4 class="uk-h4 simcool__title">Gói combo</h4>
                        <div class="uk-grid-small uk-grid-32-m uk-grid-match" uk-grid>
                            <div class="uk-width-2-5@m">
                                <div class="uk-cover-container">
                                    <img src="images/Mask1Group.png" alt="" uk-cover>
                                    <canvas width="648" height="828"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-card simcool__card uk-card-default">
                                    <div uk-slider>

                                        <div class="uk-position-relative">

                                            <div class="uk-slider-container">
                                                <ul class="uk-slider-items uk-child-width-1-1">
                                                    <li>
                                                        <div class="goicuoc__card uk-card uk-card-body uk-card-default">
                                                            <div class="uk-width-1-1">
                                                                <div class="goicuoc__card__item">
                                                                    <div class="uk-flex-middle" uk-grid>
                                                                        <div class="uk-width-expand">
                                                                            <span class="goicuoc__card__title">CƠ BẢN</span>
                                                                        </div>
                                                                        <div class="uk-width-auto">
                                                                            <span class="simcool__arrow"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="goicuoc__card__item">
                                                                    <div class="goicuoc__card__txt1">Bạn sẽ nhận được: </div>
                                                                    <ul class="uk-list goicuoc__card__list">
                                                                        <li><span>Lorem ipsum dolor sit amet, consec adipiscing elit</span></li>
                                                                        <li><span>Lorem ipsum dolor sit amet</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="goicuoc__card__item">
                                                                    <div>
                                                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                            <div class="uk-width-expand">
                                                                                <div class="goicuoc__card__txt1">Giá:</div>
                                                                            </div>
                                                                            <div class="uk-width-auto">
                                                                                <div class="goicuoc__card__txt2">5.000.000 <span>VND/Tháng</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="" hidden class="goicuoc__card__btn goicuoc__card__btn--cool uk-width-1-1 uk-button uk-button-default"><span>Chọn gói</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="goicuoc__card uk-card uk-card-body uk-card-default">
                                                            <div class="uk-width-1-1">
                                                                <div class="goicuoc__card__item">
                                                                    <div class="uk-flex-middle" uk-grid>
                                                                        <div class="uk-width-expand">
                                                                            <span class="goicuoc__card__title">SỐ ĐẸP</span>
                                                                        </div>
                                                                        <div class="uk-width-auto">
                                                                            <span class="simcool__arrow"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="goicuoc__card__item">
                                                                    <div class="goicuoc__card__txt1">Bạn sẽ nhận được: </div>
                                                                    <ul class="uk-list goicuoc__card__list">
                                                                        <li><span>Lorem ipsum dolor sit amet, consec adipiscing elit</span></li>
                                                                        <li><span>Lorem ipsum dolor sit amet</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="goicuoc__card__item">
                                                                    <div>
                                                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                                            <div class="uk-width-expand">
                                                                                <div class="goicuoc__card__txt1">Giá:</div>
                                                                            </div>
                                                                            <div class="uk-width-auto">
                                                                                <div class="goicuoc__card__txt2">5.000.000 <span>VND/Tháng</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="" hidden class="goicuoc__card__btn goicuoc__card__btn--cool uk-width-1-1 uk-button uk-button-default"><span>Chọn gói</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="">
                                                <a class="uk-position-center-left-out simcool__nav simcool__nav--prev uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                <a class="uk-position-center-right-out simcool__nav simcool__nav--next uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>