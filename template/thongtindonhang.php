<?php $data["title"] = "Thông tin đơn hàng"; ?>
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
    array(
        'txt' => 'Thanh toán',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall thongtindonhang__section">
    <div class="uk-container">
        <div class="uk-margin">
            <a href="thanhtoan.php" class="uk-button uk-button-default uk-border-pill thanhtoan__btnBack"><span>Chỉnh sửa đơn hàng</span></a>
        </div>
        <div class="uk-text-center">
            <div>
                <span class="uk-label uk-label-success thongtindonhang__label">Mã đơn hàng: #10200</span>
            </div>
            <h1 class="uk-h1 profile__content__title uk-margin-remove">Thông tin đơn hàng</h1>
        </div>
        <div class="uk-grid-small uk-flex-center uk-grid-32-m uk-grid-match" uk-grid>
            <div class="uk-width-1-2@m">
                <div class="thanhtoan__card uk-card uk-card-default uk-card-body">
                    <div class="thanhtoan__card__item">
                        <div class="uk-child-width-auto uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h5 class="uk-h5 thanhtoan__card__title">Thông tin đặt hàng</h5>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="thanhtoan__card__txt1">SIMCOOL</div>
                        <div class="home__content__sanpham__phoneNumber">056.780.<span>6666</span></div>
                    </div>
                    <div class="thanhtoan__card__item uk-visible@m">
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Thuê bao</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">Trả trước</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Ngày cập nhật</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">15:00 - 29/11/2021</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Đại lý bán</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">Nguyễn Văn A</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Gói cước</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">B100N <a href="#modal-paydetail" uk-toggle="">Xem chi tiết</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Phương thức thanh toán</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">Thanh toán tiền mặt</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Đơn giá</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">1.800.000đ</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Phí vận chuyển</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt uk-flex uk-flex-middle">50.000đ <a href="" class="thanhtoan__icon"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Tổng tiền</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt thanhtoan__card__item1__txt--c1">1.850.000đ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m">
                <div class="thanhtoan__card uk-card uk-card-default uk-card-body">
                    <div class="thanhtoan__card__item">
                        <div class="uk-child-width-auto uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h5 class="uk-h5 thanhtoan__card__title">Thông tin khách hàng</h5>
                            </div>
                            <div>
                                <a href="" class="thanhtoan__card__link1">Đổi địa chỉ</a>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Tên người nhận</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">Nhung Le</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <img src="images/mobile1/image25.png" alt="">
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-small uk-grid-86-m" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thongtindonhang__map">208 Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Hồ Chí Minh </div>
                                </div>
                                <div class="uk-width-auto@s">
                                    <div class="thongtindonhang__time">Ngày giao: 21/11/2021</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-text-center uk-margin thongtindonhang__margin">
            <a href="donhang_success.php" class="login__box__form__btnSubmit uk-button uk-button-secondary"><span>Xác nhận đơn hàng</span></a>
            <a href="cart.php" class="uk-button uk-button-default header__bottom__btn header__bottom__btn--register"><span>Hủy bỏ</span></a>
        </div>
    </div>
</div>
    <!--Xem chi tiết-->
    <div id="modal-paydetail" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog login__modal__dialog login__modal__dialog--m2 uk-modal-body uk-margin-auto-vertical">
            <button class="uk-modal-close-default login__modal__close" type="button" uk-close></button>
            <div class="thanhtoan__modal__item1">
                <h2 class="uk-modal-title uk-text-center login__modal__title">Gói SIMPAY 6 MNP</h2>
                <p class="login__modal__desc uk-text-center">Gói cước mới nhất với những ưu đãi hấp dẫn từ SIMPAY</p>
                <div class="uk-card thanhtoan__modal__card uk-card-body uk-card-default">
                    <div class="uk-grid-small uk-grid-32-m" uk-grid>
                        <div class="uk-width-2-5@m">
                            <div class="thanhtoan__modal__item">
                                <div class="thanhtoan__modal__txt1">Giá cước</div>
                                <div class="thanhtoan__modal__txt2">500.000 đ/tháng</div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="thanhtoan__modal__item">
                                <div class="thanhtoan__modal__txt1">Dịch vụ</div>
                                <div class="thanhtoan__modal__txt2">Miễn phí 60 phút đầu/ gọi nội mạng</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center thanhtoan__modal__box">
                    <div>Chia sẻ ngay với bạn bè</div>
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-center uk-grid-16" uk-grid>
                        <div>
                            <a href="" class="thanhtoan__modal__icon thanhtoan__modal__icon--fb"></a>
                        </div>
                        <div>
                            <a href="" class="thanhtoan__modal__icon thanhtoan__modal__icon--tw"></a>
                        </div>
                        <div>
                            <a href="" class="thanhtoan__modal__icon thanhtoan__modal__icon--ins"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Xem chi tiết-->
<?php require "template-parts/layouts/footer.php"; ?>