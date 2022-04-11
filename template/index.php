<?php $data["title"] = "Trang chủ"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = true; ?>
<?php $isSticky = true; ?>
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

    <ul class="uk-slideshow-nav uk-position-bottom-center uk-dotnav uk-flex-center uk-margin"></ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--/Slider-->

<div class="uk-section-small home__section">
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
                                    <div class="home__sanpham__number"><a href="simphongthuy.php" class="uk-link-toggle">0586.779.666</a></div>
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
    <?php include "template-parts/layouts/search.php"; ?>
    <div class="uk-hidden@m home__searchmb uk-margin-small-bottom" uk-sticky="offset: 60">
        <div class="uk-container">
            <div class="uk-flex-middle uk-grid-16" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-inline uk-width-1-1 home__search__mobile">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input id="searchmb" class="uk-input" type="text" placeholder="Tìm tên, phong thuỷ,...">
                    </div>
                </div>
                <div class="uk-width-auto uk-flex uk-flex-middle">
                    <div class="boloc__btnFillter" uk-toggle="target: #offcanvas-fillter"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-container">
        <div class="uk-position-relative banner" uk-sticky="offset: 190">
            <a href="" class="uk-position-center-left-out banner__img"><img src="images/BANNER160x600-01left.png" alt=""></a>
            <a href="" class="uk-position-center-right-out banner__img"><img src="images/BANNER160x600-02right.png" alt=""></a>
        </div>
        <a href="" class="uk-position-fixed uk-position-bottom bottomBaner"><img src="images/Mainbanner_landingpage1-01.png" alt=""></a>
        <div class="home__content">
            <div class="uk-grid-divider uk-grid-medium" uk-grid>
                <div class="uk-width-1-4@m uk-visible@m">
                    <div class="uk-section-xsmall home__content__section" uk-sticky="offset: 170; bottom: true;">
                        <?php include "template-parts/layouts/boloc.php"; ?>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-section-xsmall home__content__section">
                        <div class="home__content__mb23">
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="home__content__txtKetqua">15 Kết quả</div>
                                </div>
                                <div class="uk-width-auto@s">
                                    <div class="uk-child-width-auto uk-flex-middle uk-grid-19" uk-grid>
                                        <div>
                                            <div class="home__content__labelSort">Sắp xếp kết quả theo:</div>
                                        </div>
                                        <div>
                                            <div uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">Tất cả</option>
                                                    <option value="1">Giá thấp đến cao</option>
                                                    <option value="2">Giá cao đến thấp</option>
                                                    <option value="3">Theo bộ lọc đã chọn</option>
                                                    <option value="4">Ưu đãi</option>
                                                </select>
                                                <button class="uk-button uk-button-default home__content__btnSort" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-icon uk-position-center-right"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home__content__mb77">
                            <?php include "template-parts/layouts/products.php"; ?>
                        </div>

                        <ul class="uk-pagination uk-flex-center pagination uk-grid-4" uk-margin>
                            <li><a href="#"><span uk-pagination-previous></span></a></li>
                            <li><a href="#">1</a></li>
                            <li class="uk-disabled"><span>...</span></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li class="uk-active"><span>7</span></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#"><span uk-pagination-next></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-small">
            <h2 class="uk-h2 profile__content__title uk-text-center">Đơn hàng mới</h2>
            <div class="uk-text-right home__donhang__box1">
                <div class="home__donhang__box1__txt">Đã có <span>1234</span> đơn đặt hàng</div>
            </div>
            <div class="uk-grid-small uk-child-width-1-3@m uk-grid-20-m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .home__donhang__card; delay: 300; repeat: false">
                <?php
                $name = array(
                    'Trần Minh Ngọc',
                    'Cao Trung Hiếu',
                    'Lê Nhung',
                    'Lê Mạnh Hải',
                    'Huy Bùi',
                    'Trần Huyền',
                );
                for ($i=1;$i<=6;$i++): ?>
                    <div>
                        <div class="uk-card home__donhang__card uk-card-default uk-card-body">
                            <div class="home__donhang__item">
                                <div>
                                    <div class="uk-child-width-auto uk-grid-small uk-flex-between uk-flex-middle uk-grid" uk-grid="">
                                        <div>
                                            <div class="home__donhang__name"><?= $name[array_rand($name)] ?></div>
                                        </div>
                                        <div>
                                            <div class="home__donhang__sim">SIM <span style="color: #3772FF">COOL</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-child-width-auto uk-grid-small uk-flex-between uk-flex-middle uk-grid" uk-grid="">
                                        <div>
                                            <div class="home__donhang__so">Sim số: <span>0586.77****</span></div>
                                        </div>
                                        <div>
                                            <img class="home__content__sanpham__card__logo" src="images/_Thẻ/1600px-Viettel_logo_2021 1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home__donhang__item">
                                <div class="uk-grid-0-s uk-grid-10 uk-grid-match" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="home__donhang__box uk-flex uk-flex-middle uk-width-1-1">
                                            <div class="uk-grid-16 uk-child-width-auto uk-flex-center uk-flex-middle uk-flex-between uk-width-1-1" uk-grid>
                                                <div>
                                                    <div class="home__donhang__txt home__donhang__txt--date line-clamp-1">06, June 2021</div>
                                                </div>
                                                <div>
                                                    <div class="home__donhang__txt home__donhang__txt--money line-clamp-1">MDwjfkljklg9824</div>
                                                </div>
                                                <div>
                                                    <span class="home__donhang__price1">1.800.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto@s uk-hidden">
                                        <div class="uk-button uk-width-1-1 uk-button-primary home__donhang__price">1.800.000đ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<!-- This is the modal with the outside close button -->
<div id="modal-close-outside-popupBanner" uk-modal>
    <div class="uk-modal-dialog popupBaner__dialog">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <a href=""><img src="images/Popupbannercopy.png" alt=""></a>
    </div>
</div>
<script>
    UIkit.modal('#modal-close-outside-popupBanner').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>