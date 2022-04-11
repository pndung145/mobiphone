<?php $data["title"] = "Thanh toán"; ?>
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
        'txt' => 'Chọn gói sim',
        'link' => '',
    ),
    array(
        'txt' => 'Thanh toán',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall thanhtoan__section">
    <div class="uk-container">
        <div class="uk-margin">
            <a href="#modal-package" uk-toggle class="uk-button uk-button-default uk-border-pill thanhtoan__btnBack"><span>Quay về chọn gói cước</span></a>
        </div>
        <div class="uk-grid-30 uk-grid-136-m" uk-grid>
            <div class="uk-width-1-2@m uk-flex-last@m">
                <div class="thanhtoan__card uk-card uk-card-default uk-card-body uk-visible@m">
                    <div class="thanhtoan__card__item">
                        <div class="uk-child-width-auto uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h5 class="uk-h5 thanhtoan__card__title">Tổng quan</h5>
                            </div>
                            <div>
                                <a href="cart.php" class="thanhtoan__card__link1">Thay đổi</a>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="uk-cover-container thanhtoan__card__cover">
                            <img src="images/mobile1/sean-sinclair-FQ7cRFUU1y0-unsplash1.png" alt="" uk-cover>
                            <canvas width="984" height="550"></canvas>
                            <div class="uk-position-cover uk-padding-small thanhtoan__card__boxsim">
                                <div class="uk-width-1-1">
                                    <div class="thanhtoan__card__boxsim__txtsim">SIM COOL</div>
                                    <div class="thanhtoan__card__boxsim__txtso">0586 779 666</div>
                                    <div class="uk-flex-bottom" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="thanhtoan__card__boxsim__txtDate">Ngày kích hoạt</div>
                                            <div class="thanhtoan__card__boxsim__txtDate1">21.09.2021</div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <img src="images/mobile1/Group3847.png" alt="">
                                        </div>
                                    </div>
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="thanhtoan__card__boxsim__txt1">Mạng di động số 1 Việt Nam</div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="thanhtoan__card__boxsim__txt2">SIMPAY</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="uk-margin">
                        <div class="uk-margin uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <input value="" class="uk-checkbox thanhtoanMethod boloc__checkBox__check" name="payment" type="checkbox">
                            </div>
                            <div class="uk-width-expand">
                                <div class="login__box__txt1 uk-margin-remove">Với việc ấn vào nút “Đặt mua", Tôi đồng ý với <a href="">Điều khoản mua hàng</a> và
                                    <a href="">Chính sách</a> của SIMPAY</div>
                            </div>
                        </div>
                        <a href="thongtindonhang.php" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Đặt mua sim</span></a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m">
                <div class="thanhtoan__left__item">
                    <h3 class="uk-h3 thanhtoan__left__title">Tải thông tin CMND*</h3>
                    <div class="uk-grid-16 uk-child-width-1-3@m uk-grid-match" uk-grid>
                        <div>
                            <div class="thanhtoan__left__file uk-cover-container" uk-form-custom>
                                <input type="file">
                                <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                    <div class="uk-text-center">
                                        <div class="thanhtoan__left__file__camera"></div>
                                        <div class="thanhtoan__left__file__txt">CMND mặt trước</div>
                                    </div>
                                </div>
                                <canvas width="180" height="150"></canvas>
                            </div>
                        </div>
                        <div>
                            <div class="uk-cover-container thanhtoan__left__choosefile">
                                <div class="uk-position-cover thanhtoan__left__choosefile__cover">
                                    <div>
                                        <div style="margin-bottom: 5px">
                                            <img src="images/mobile1/quy-dinh-ve-anh-lam-chung-minh-thu-nhan-dan-13-790x10241.png" alt="">
                                        </div>
                                        <div uk-form-custom>
                                            <input type="file">
                                            <span class="uk-link">Chọn lại</span>
                                        </div>
                                    </div>
                                </div>
                                <canvas width="180" height="150"></canvas>
                            </div>
                        </div>
                        <div>
                            <div class="uk-cover-container thanhtoan__left__choosefile">
                                <div class="uk-position-cover">
                                    <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                        <div class="uk-text-center">
                                            <div class="thanhtoan__left__file__camera thanhtoan__left__file__camera--upload"></div>
                                            <div class="thanhtoan__left__file__txt">Đang tải file ảnh...</div>
                                        </div>
                                    </div>
                                </div>
                                <canvas width="180" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thanhtoan__left__item">
                    <h3 class="uk-h3 thanhtoan__left__title">Thông tin đặt mua</h3>
                    <form class="uk-form-stacked">
                        <fieldset class="uk-fieldset">
                            <div class="">
                                <div class="uk-child-width-1-1 uk-grid-small uk-grid-24-m" uk-grid>
                                    <div>
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">HỌ VÀ TÊN*</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input profile__form__input" id="form-stacked-text" type="text" placeholder="Ví dụ: Nguyễn Văn A,...." value="">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">NGÀY SINH*</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-inline uk-width-1-1">
                                                <a class="profile__form__iconDate uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
                                                <input class="uk-input profile__form__input" type="text" value="" placeholder="Ví dụ: 04/02/1991,....">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s">
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">SỐ CMND/ CCCD/ HỘ CHIẾU*</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input profile__form__input" id="form-stacked-text" type="text" placeholder="Ví dụ: 061092170,...." value="">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s">
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">NGÀY CẤP*</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-inline uk-width-1-1">
                                                <a class="profile__form__iconDate uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
                                                <input class="uk-input profile__form__input" type="text" value="" placeholder="Ví dụ: 04/02/1991,....">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s">
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">NƠI CẤP*</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input profile__form__input" id="form-stacked-text" type="text" placeholder="Ví dụ: Công an tỉnh A,...." value="">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s">
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">Quốc tịch</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">Việt nam</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="profile__form__btnSelect uk-width-1-1 uk-button uk-button-default" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">Nơi đăng ký thường trú</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input profile__form__input" id="form-stacked-text" type="text" placeholder="Ví dụ: Nguyễn Văn A,...." value="">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">SỐ ĐIỆN THOẠI LIÊN HỆ</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input profile__form__input" id="form-stacked-text" type="tel" placeholder="Ví dụ: 0946787200,...." value="">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="uk-form-label profile__form__label" for="form-stacked-text">ĐỊA CHỈ GIAO HÀNG</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input profile__form__input" id="form-stacked-text" type="text" placeholder="Ví dụ: 208 Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Hồ Chí Minh " value="208 Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Hồ Chí Minh ">
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px !important;">
                                        <img src="images/mobile1/Group4140.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="thanhtoan__left__item">
                    <h3 class="uk-h3 thanhtoan__left__title">Hình thức thanh toán</h3>
                    <div class="uk-margin uk-grid-10 uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                        <label><input value="" class="uk-checkbox thanhtoanMethod boloc__checkBox__check" name="payment" type="radio" checked=""> <span class="boloc__checkBox__txt">Thanh toán tiền mặt</span></label>
                        <label><input value="tragop" class="uk-checkbox thanhtoanMethod boloc__checkBox__check" name="payment" type="radio"> <span class="boloc__checkBox__txt">Thanh toán trả góp</span></label>
                        <div class="Boxtragop" style="display: none">
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid uk-grid-12">
                                <label>
                                    <input value="vnpay" class="uk-radio thanhtoan__method__input1" type="radio" name="radio2pay">
                                    <a href="https://www.vnpay.vn"><img class="thanhtoan__method__logo" src="images/vnpay.png" alt=""></a>
                                </label>
                            </div>
                        </div>
                        <label><input value="payonline" class="uk-checkbox thanhtoanMethod boloc__checkBox__check" name="payment" type="radio"> <span class="boloc__checkBox__txt">Thanh toán trực tuyến</span></label>
                        <div class="Box" style="display: none">
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid uk-grid-12">
                                <label>
                                    <input value="visa" class="uk-radio thanhtoan__method__input" type="radio" name="radio2pay" checked>
                                    <img class="thanhtoan__method__logo" src="images/visa.png" alt="">
                                </label>
                                <label>
                                    <input value="mastercard" class="uk-radio thanhtoan__method__input" type="radio" name="radio2pay">
                                    <img class="thanhtoan__method__logo" src="images/mastercard.png" alt="">
                                </label>
                                <label>
                                    <input value="the" class="uk-radio thanhtoan__method__input" type="radio" name="radio2pay">
                                    <img class="thanhtoan__method__logo" src="images/the.png" alt="">
                                </label>
                                <label>
                                    <input value="momo" class="uk-radio thanhtoan__method__input" type="radio" name="radio2pay">
                                    <img class="thanhtoan__method__logo" src="images/momo.png" alt="">
                                </label>
                                <label>
                                    <input value="payoo" class="uk-radio thanhtoan__method__input" type="radio" name="radio2pay">
                                    <img class="thanhtoan__method__logo" src="images/payoo.png" alt="">
                                </label>
                                <label>
                                    <input value="vnpay" class="uk-radio thanhtoan__method__input" type="radio" name="radio2pay">
                                    <img class="thanhtoan__method__logo" src="images/vnpay.png" alt="">
                                </label>
                            </div>
                            <div class="thanhtoan__method__box uk-cover-container" style="display: none">
                                <div class="uk-padding-small uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                    <div class="uk-text-center thanhtoan__method__box1">
                                        <div><img src="images/Group4148.png" alt=""></div>
                                        <div class="thanhtoan__method__box1__txt">Sử dụng ứng dụng VNPAY <br> quét mã QR</div>
                                        <div><a href="" class="thanhtoan__method__box1__link">Hướng dẫn thanh toán</a></div>
                                    </div>
                                </div>
                                <canvas width="573" height="432"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<script>
    // UIkit.modal('#modal-paydetail').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>