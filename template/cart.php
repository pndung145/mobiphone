<?php $data["title"] = "Giỏ hàng"; ?>
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
        'link' => '',
    ),
    array(
        'txt' => 'Giỏ hàng',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-small cart__section">
    <div class="uk-container">
        <h1 class="uk-h1 profile__content__title">Giỏ hàng của tôi</h1>
        <div class="uk-grid uk-grid-16 uk-child-width-auto" uk-grid>
            <div>
                <a href="javascript:void(0)" class="uk-button uk-active cart__btnMenu uk-button-default"><span>SIM đã lưu</span></a>
            </div>
            <div>
                <a href="javascript:void(0)" class="uk-button cart__btnMenu uk-button-default"><span>Đã đặt</span></a>
            </div>
            <div>
                <a href="javascript:void(0)" class="uk-button cart__btnMenu uk-button-default"><span>Đang giao hàng</span></a>
            </div>
        </div>
        <div class="uk-child-width-1-3@m cart__grid uk-grid-small uk-grid-32-m" uk-grid>
            <?php for ($i=0;$i<=1;$i++): ?>
            <div>
                <div class="uk-card cart__card uk-card-default uk-card-body">
                    <div class="uk-position-top-right cart__card__position">
                        <a href="#" class="cart__card__icon cart__card__icon--wishList"></a>
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
<?php require "template-parts/layouts/footer.php"; ?>