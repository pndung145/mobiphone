<?php $data["title"] = "Danh sách yêu thích"; ?>
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
        'txt' => 'Danh sách yêu thích',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-small cart__section wishlist__section">
    <div class="uk-container">
        <h1 class="uk-h1 profile__content__title">Danh sách yêu thích</h1>
        <div class="wishlist__txt">2 Sim</div>
        <div class="uk-child-width-1-3@m cart__grid uk-grid-small uk-grid-32-m" uk-grid>
            <?php for ($i=0;$i<=1;$i++): ?>
            <div>
                <div class="uk-card cart__card uk-card-default uk-card-body">
                    <div class="uk-position-top-right cart__card__position">
                        <a href="#" class="cart__card__icon cart__card__icon--wishList uk-active"></a>
                        <a href="#modal-trash" class="cart__card__icon cart__card__icon--trash" uk-toggle></a>
                    </div>
                    <div class="home__content__sanpham__mb">
                        <div class="home__content__sanpham__phoneNumber">056.780.<span>6666</span></div>
                        <span class="home__content__sanpham__info"></span>
                    </div>
                    <div class="uk-child-width-auto uk-grid-small uk-flex-between uk-flex-middle" uk-grid>
                        <div>
                            <img src="images/_Thẻ/1600px-Viettel_logo_2021 1.png" alt="">
                        </div>
                        <div>
                            <span class="home__content__sanpham__priceTxt">1.800.000đ</span>
                        </div>
                    </div>
                    <div class="cart__card__box">
                        <div class="uk-child-width-auto uk-grid-small uk-flex-middle uk-flex-between" uk-grid>
                            <div>
                                <div class="cart__card__quantam"><span>2,500</span></div>
                            </div>
                            <div>
                                <button type="button" uk-toggle="target: #modal-package" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Mua ngay</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<!--Xoá thẻ-->
<div id="modal-trash" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog login__modal__dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default login__modal__close" type="button" uk-close></button>
        <h2 class="uk-modal-title login__modal__title">Xoá thẻ</h2>
        <p class="login__modal__desc">Bạn có chắc chẵn muốn xoá thẻ khỏi giỏ hàng không? Giữ lại thẻ trong giỏ sẽ đỡ tốn thời gian tìm lại thẻ đó</p>

        <div class="uk-grid-8" uk-grid>
            <div class="uk-width-1-1">
                <button type="submit" class="login__box__form__btnSubmit login__box__form__btnSubmit--trash uk-button uk-button-secondary uk-width-1-1"><span>Đồng ý xoá thẻ</span></button>
            </div>
            <div class="uk-width-1-1">
                <button type="submit" class="uk-modal-close login__box__form__btnSubmit uk-button uk-button-default uk-width-1-1"><span>Quay lại</span></button>
            </div>
        </div>
    </div>
</div>
<!--/Xoá thẻ-->

<!--Chọn gói cước-->
<div id="modal-package" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog login__modal__dialog login__modal__dialog--m uk-modal-body">

        <button class="uk-modal-close-default login__modal__close" type="button" uk-close></button>
        <h2 class="uk-modal-title login__modal__title">Chọn gói cước</h2>

        <div class="uk-grid-32 uk-child-width-1-1" uk-grid>
            <div>
                <h3 class="uk-h3 cart__modal__title">Gói cước chính (2)</h3>
                <div class="uk-grid-small uk-child-width-1-2@m uk-grid-24-m" uk-grid>
                    <div>
                        <div class="uk-card cart__card uk-card-default uk-card-body">
                            <div class="uk-grid-16" uk-grid>
                                <div class="uk-width-auto@m">
                                    <div class="cart__modal__coverImg uk-cover-container uk-border-circle">
                                        <span class="uk-position-center">B</span>
                                        <canvas width="56" height="56"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 cart__modal__title1">SIMPAY 6 MNP</h3>
                                    <div class="cart__modal__desc line-clamp-2">500.000 đ/tháng: Miễn phí 60 phút đầu tiên/cuộc gọi nội mạng, 500...</div>
                                </div>
                            </div>
                            <div class="cart__card__box">
                                <div class="uk-child-width-auto uk-grid-small uk-flex-middle uk-flex-between" uk-grid>
                                    <div>
                                        <div class="cart__modal__price">100.000đ/ <span>tháng</span></div>
                                    </div>
                                    <div>
                                        <label>
                                            <input class="uk-checkbox cart__modal__check" type="checkbox" checked>
                                            <div class="cart__modal__label" data-select="Đã chọn" data-unselect="Chọn"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card cart__card uk-card-default uk-card-body">
                            <div class="uk-grid-16" uk-grid>
                                <div class="uk-width-auto@m">
                                    <div class="cart__modal__coverImg uk-cover-container uk-border-circle">
                                        <span class="uk-position-center">B</span>
                                        <canvas width="56" height="56"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 cart__modal__title1">SIMPAY 6</h3>
                                    <div class="cart__modal__desc line-clamp-2">500.000 đ/tháng: Miễn phí 60 phút đầu tiên/cuộc gọi nội mạng, 500...</div>
                                </div>
                            </div>
                            <div class="cart__card__box">
                                <div class="uk-child-width-auto uk-grid-small uk-flex-middle uk-flex-between" uk-grid>
                                    <div>
                                        <div class="cart__modal__price">100.000đ/ <span>tháng</span></div>
                                    </div>
                                    <div>
                                        <label>
                                            <input class="uk-checkbox cart__modal__check" type="checkbox">
                                            <div class="cart__modal__label" data-select="Đã chọn" data-unselect="Chọn"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="uk-h3 cart__modal__title">Gói đi kèm</h3>
                <div class="uk-grid-small uk-child-width-1-2@m uk-grid-24-m" uk-grid>
                    <div>
                        <div class="uk-card cart__card uk-card-default uk-card-body">
                            <div class="uk-grid-16" uk-grid>
                                <div class="uk-width-auto@m">
                                    <div class="cart__modal__coverImg uk-cover-container uk-border-circle">
                                        <span class="uk-position-center">B</span>
                                        <canvas width="56" height="56"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 cart__modal__title1">SIM PAY COOL</h3>
                                    <div class="cart__modal__desc line-clamp-2">500.000 đ/tháng: Miễn phí 60 phút đầu tiên/cuộc gọi nội mạng, 500...</div>
                                </div>
                            </div>
                            <div class="cart__card__box">
                                <div class="uk-child-width-auto uk-grid-small uk-flex-middle uk-flex-between" uk-grid>
                                    <div>
                                        <div class="cart__modal__price">55.000đ/ <span>tháng</span></div>
                                    </div>
                                    <div>
                                        <label>
                                            <input class="uk-checkbox cart__modal__check" type="checkbox">
                                            <div class="cart__modal__label" data-select="Đã chọn" data-unselect="Chọn"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card cart__card uk-card-default uk-card-body">
                            <div class="uk-grid-16" uk-grid>
                                <div class="uk-width-auto@m">
                                    <div class="cart__modal__coverImg uk-cover-container uk-border-circle">
                                        <span class="uk-position-center">B</span>
                                        <canvas width="56" height="56"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-h3 cart__modal__title1">SIM PAY 1</h3>
                                    <div class="cart__modal__desc line-clamp-2">500.000 đ/tháng: Miễn phí 60 phút đầu tiên/cuộc gọi nội mạng, 500...</div>
                                </div>
                            </div>
                            <div class="cart__card__box">
                                <div class="uk-child-width-auto uk-grid-small uk-flex-middle uk-flex-between" uk-grid>
                                    <div>
                                        <div class="cart__modal__price">55.000đ/ <span>tháng</span></div>
                                    </div>
                                    <div>
                                        <label>
                                            <input class="uk-checkbox cart__modal__check" type="checkbox">
                                            <div class="cart__modal__label" data-select="Đã chọn" data-unselect="Chọn"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-text-center">
                    <button type="submit" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Xác nhận</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Chọn gói cước-->
<?php require "template-parts/layouts/footer.php"; ?>