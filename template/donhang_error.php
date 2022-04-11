<?php $data["title"] = " Thanh toán lỗi"; ?>
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
                            <img src="images/mobile1/Group1322.png" alt="">
                        </div>
                        <h1 class="uk-h1 profile__content__title uk-margin-remove"><span style="color: #E73C3D;">Opps,</span> Đơn hàng của bạn bị lỗi</h1>
                        <div class="donhang_success__box__mb2 donhang_success__box__desc">Đơn hàng của bạn đã xảy ra lỗi. Hãy kiểm tra lại <span>Giỏ hàng của tôi</span> hoặc <span>Liên hệ</span> với chúng tôi ngay nhé </div>
                        <a href="." class="login__box__form__btnSubmit uk-button uk-button-secondary"><span>Quay trở về trang chủ</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>