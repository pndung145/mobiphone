<?php $data["title"] = "Thanh toán thành công"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = false; ?>
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
    array(
        'txt' => 'Thanh toán',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true">
    <div class="uk-section-xsmall uk-width-1-1 donhang_success__section">
        <div class="uk-container">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-auto">
                    <div class="donhang_success__box">
                        <div class="donhang_success__box__mb1">
                            <img src="images/mobile1/Group1333.png" alt="">
                        </div>
                        <h1 class="uk-h1 profile__content__title uk-margin-remove">Thanh toán thành công</h1>
                        <div class="donhang_success__box__mb2 donhang_success__box__desc">Đơn hàng của bạn đã đặt thành công. Chúng tôi đã gửi hoá đơn vào email: <span>Info***@gmail.com</span> và số điện thoại <span>+84*********</span>. Hãy kiểm tra lại mail của bạn nhé</div>
                        <a href="." class="login__box__form__btnSubmit uk-button uk-button-secondary"><span>Quay trở về trang chủ</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>