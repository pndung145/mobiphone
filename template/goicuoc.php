<?php $data["title"] = "Gói combo"; ?>
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
        <div class="uk-section-small">
            <h2 class="uk-h2 profile__content__title uk-text-center">Gói cước</h2>
            <div class="uk-grid-small uk-grid-32-m" uk-grid>
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-32-m uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-cover-container">
                                <img src="images/MaskGroup.png" alt="" uk-cover>
                                <canvas width="738" height="800"></canvas>
                            </div>
                        </div>
                        <div>
                            <div class="goicuoc__card uk-card uk-card-body uk-card-default">
                                <div class="uk-width-1-1">
                                    <div class="goicuoc__card__item">
                                        <span class="goicuoc__card__title">CƠ BẢN</span>
                                    </div>
                                    <div class="goicuoc__card__item">
                                        <div class="goicuoc__card__txt1">Bạn sẽ nhận được: </div>
                                        <ul class="uk-list goicuoc__card__list">
                                            <li><span>Sim COOL cơ bản</span></li>
                                            <li><span>Gói cam kết 12 tháng</span></li>
                                        </ul>
                                    </div>
                                    <div class="goicuoc__card__item">
                                        <div>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="goicuoc__card__txt1">Giá:</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <div class="goicuoc__card__txt2">95.000 <span>VND/Tháng</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="goicuoc__card__btn goicuoc__card__btn--cool uk-width-1-1 uk-button uk-button-default"><span>Chọn gói</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="goicuoc__card uk-card uk-card-body uk-card-default">
                                <div class="uk-width-1-1">
                                    <div class="goicuoc__card__item">
                                        <span class="goicuoc__card__title">SỐ ĐẸP</span>
                                    </div>
                                    <div class="goicuoc__card__item">
                                        <div class="goicuoc__card__txt1">Bạn sẽ nhận được: </div>
                                        <ul class="uk-list goicuoc__card__list">
                                            <li><span>Sim COOL cơ bản</span></li>
                                            <li><span>Gói cam kết 12 tháng</span></li>
                                        </ul>
                                    </div>
                                    <div class="goicuoc__card__item">
                                        <div>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="goicuoc__card__txt1">Giá:</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <div class="goicuoc__card__txt2">130.000 <span>VND/Tháng</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="goicuoc__card__btn goicuoc__card__btn--cool uk-width-1-1 uk-button uk-button-default"><span>Chọn gói</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-32-m uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-cover-container">
                                <img src="images/MaskGroup1.png" alt="" uk-cover>
                                <canvas width="738" height="800"></canvas>
                            </div>
                        </div>
                        <div>
                            <div class="goicuoc__card uk-card uk-card-body uk-card-default">
                                <div class="uk-width-1-1">
                                    <div class="goicuoc__card__item">
                                        <span class="goicuoc__card__title">CƠ BẢN</span>
                                    </div>
                                    <div class="goicuoc__card__item">
                                        <div class="goicuoc__card__txt1">Bạn sẽ nhận được: </div>
                                        <ul class="uk-list goicuoc__card__list">
                                            <li><span>Sim BIZ cơ bản</span></li>
                                            <li><span>Gói cam kết 12 tháng (290.000đ)</span></li>
                                        </ul>
                                    </div>
                                    <div class="goicuoc__card__item">
                                        <div>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="goicuoc__card__txt1">Giá:</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <div class="goicuoc__card__txt2">1.290.000 <span>VND/Tháng</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="goicuoc__card__btn goicuoc__card__btn--biz uk-width-1-1 uk-button uk-button-default"><span>Chọn gói</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="goicuoc__card uk-card uk-card-body uk-card-default">
                                <div class="uk-width-1-1">
                                    <div class="goicuoc__card__item">
                                        <span class="goicuoc__card__title">SỐ ĐẸP</span>
                                    </div>
                                    <div class="goicuoc__card__item">
                                        <div class="goicuoc__card__txt1">Bạn sẽ nhận được: </div>
                                        <ul class="uk-list goicuoc__card__list">
                                            <li><span>Sim BIZ cơ bản</span></li>
                                            <li><span>Gói cam kết 12 tháng (340.000đ)</span></li>
                                        </ul>
                                    </div>
                                    <div class="goicuoc__card__item">
                                        <div>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="goicuoc__card__txt1">Giá:</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <div class="goicuoc__card__txt2">5.340.000 <span>VND/Tháng</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="goicuoc__card__btn goicuoc__card__btn--biz uk-width-1-1 uk-button uk-button-default"><span>Chọn gói</span></a>
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