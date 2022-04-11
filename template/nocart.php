<?php $data["title"] = "Giỏ hàng trống"; ?>
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
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
    <div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;offset-bottom: true">
        <div class="uk-section-xsmall uk-width-1-1 donhang_success__section">
            <div class="uk-container">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-text-center">
                            <div class="donhang_success__box__mb1">
                                <img src="images/Group1333.png" alt="">
                            </div>
                            <h1 class="uk-h1 profile__content__title uk-margin-remove"><span style="color: #E73C3D;">Opps,</span> Giỏ hàng của bạn đang trống</h1>
                            <div class="donhang_success__box__mb2 donhang_success__box__desc">Hãy để chúng tôi giúp bạn lựa chọn SIM phù hợp nhé</div>
                            <a href="timsim.php" class="login__box__form__btnSubmit uk-button uk-button-secondary"><span>Tìm SIM</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require "template-parts/layouts/footer.php"; ?>