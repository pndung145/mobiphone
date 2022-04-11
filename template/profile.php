<?php $data["title"] = "Profile"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-xsmall uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/image-from-rawpixel-id-597407-jpeg1.png" uk-img>
    <div class="uk-container">
        <div class="" uk-toggle="cls: uk-flex-bottom; mode: media; media: @m" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-height-small" style="height: 125px;"></div>
            </div>
            <div class="uk-width-auto">
                <a href="" class="uk-button uk-button-default uk-border-pill profile__btnEdit"><span>Sửa thông tin</span></a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section profile__section">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid-50-m uk-grid-108-l" uk-grid>
            <div class="uk-width-auto@m">
                <div class="profile__card uk-card uk-card-default uk-card-body">
                    <div class="uk-text-center">
                        <div class="uk-cover-container uk-border-circle uk-display-inline-block">
                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                            <canvas width="120" height="120"></canvas>
                        </div>
                    </div>
                    <div class="uk-text-center profile__card__box">
                        <div class="profile__card__box__name">Hai LE Manh</div>
                        <div class="profile__card__box__txt">Thành viên <span>Silver</span> từ 09/2021</div>
                    </div>
                    <ul class="uk-list profile__card__list">
                        <li><span>Số điện thoại</span></li>
                        <li><span>Địa chỉ mail</span></li>
                        <li class="verified"><span>Số CMND/ Hộ chiếu</span></li>
                    </ul>
                    <div class="profile__card__logout">
                        <a href="">Thoát tài khoản</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div uk-grid>
                    <div class="uk-width-auto@m">
                        <div class="profile__width">
                            <h1 class="uk-h1 profile__content__title">Quản lý tài khoản</h1>
                            <form class="uk-form-stacked">
                                <fieldset class="uk-fieldset">

                                    <legend class="uk-legend profile__form__title">Thông tin cá nhân</legend>
                                    <div class="">
                                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-24-m" uk-grid>
                                            <div>
                                                <label class="uk-form-label profile__form__label" for="form-stacked-text">HỌ VÀ TÊN*</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <a class="profile__form__edit uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
                                                        <input disabled class="uk-input profile__form__input" id="form-stacked-text" type="text" placeholder="" value="Lê Hồng Nhung">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="uk-form-label profile__form__label" for="form-stacked-text">NGÀY SINH*</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <a class="profile__form__iconDate uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
                                                        <input class="uk-input profile__form__input" type="text" value="21/09/1997">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2@s">
                                                <label class="uk-form-label profile__form__label" for="form-stacked-text">SỐ CMND/ CCCD/ HỘ CHIẾU*</label>
                                                <div class="uk-form-controls">
                                                    <input class="uk-input profile__form__input verified" id="form-stacked-text" type="text" placeholder="" value="061092170">
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2@s">
                                                <label class="uk-form-label profile__form__label" for="form-stacked-text">NGÀY CẤP*</label>
                                                <div class="uk-form-controls">
                                                    <input class="uk-input profile__form__input verified" id="form-stacked-text" type="text" placeholder="" value="04/02/1991">
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2@s">
                                                <label class="uk-form-label profile__form__label" for="form-stacked-text">NƠI CẤP*</label>
                                                <div class="uk-form-controls">
                                                    <input class="uk-input profile__form__input verified" id="form-stacked-text" type="text" placeholder="" value="Công an tỉnh A">
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
                                                    <div class="uk-inline uk-width-1-1">
                                                        <a class="profile__form__edit uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
                                                        <input disabled class="uk-input profile__form__input" id="form-stacked-text" type="text" placeholder="" value="144 Đội Cấn, Ba Đình, Hà Nội">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="uk-form-label profile__form__label" for="form-stacked-text">Số điện thoại</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-grid-16" uk-grid>
                                                        <div class="uk-width-expand">
                                                            <input class="uk-input profile__form__input" id="form-stacked-text" type="tel" placeholder="" value="0946787200">
                                                        </div>
                                                        <div class="uk-width-auto">
                                                            <button type="button" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Xác minh</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="uk-form-label profile__form__label" for="form-stacked-text">email</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-grid-16" uk-grid>
                                                        <div class="uk-width-expand">
                                                            <input class="uk-input profile__form__input" id="form-stacked-text" type="email" placeholder="" value="infor@gmail.com">
                                                        </div>
                                                        <div class="uk-width-auto">
                                                            <button type="button" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Xác minh</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="uk-form-label profile__form__label" for="form-stacked-text">ĐỊA CHỈ GIAO HÀNG</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-inline uk-width-1-1">
                                                        <a class="profile__form__edit uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
                                                        <input disabled class="uk-input profile__form__input" id="form-stacked-text" type="text" placeholder="" value="208 Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Hồ Chí Minh ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>