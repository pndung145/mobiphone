import React from 'react'
import BannerReg from '../images/banner_login.png'
import ImgYay from '../images/Yay.png'
export default function Register() {
    return (
        <div>
            <div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">


                <div class="uk-flex" uk-height-viewport uk-toggle="cls: uk-flex-middle; mode: media; media: @m">
                    <div class="uk-width-1-1" uk-toggle="cls: uk-section-small; mode: media; media: @m">
                        <div class="uk-container" uk-toggle="cls: uk-padding-remove; mode: media; media: (max-width: 959px)">
                            <div class="uk-grid-match uk-grid-0 uk-grid-40-m uk-grid-108-l" uk-grid>
                                <div class="uk-width-3-5@m">
                                    <div class="uk-cover-container login__box__coverImg">
                                        <img src={BannerReg} alt="" uk-cover />
                                            {/* <canvas width="1448" height="1180"></canvas> */}
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-grid-match uk-flex-center" uk-grid>
                                        <div class="uk-width-3-5@s uk-width-1-1@m">
                                            <div class="uk-flex uk-flex-column login__box">
                                                <div class="uk-flex-auto">
                                                    <form>
                                                        <fieldset class="uk-fieldset">

                                                            <legend class="uk-legend login__box__form__title">Đăng ký</legend>

                                                            <div class="uk-margin">
                                                                <div class="uk-inline uk-width-1-1">
                                                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--phone" uk-icon="icon: user"></span>
                                                                    <input class="uk-input login__box__form__input" type="tel" placeholder="Số điện thoại" />
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin">
                                                                <div class="uk-inline uk-width-1-1">
                                                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--pass" uk-icon="icon: user"></span>
                                                                    <input id="ipnPassword" class="uk-input login__box__form__input" type="password" placeholder="Mật khẩu" />
                                                                        <span id="btnPassword" class="login__box__form__showPass"></span>
                                                                </div>
                                                            </div>
                                                            <div class="uk-margin">
                                                                <div class="uk-inline uk-width-1-1">
                                                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--pass" uk-icon="icon: user"></span>
                                                                    <input id="ipnPassword-confirm" class="uk-input login__box__form__input" type="password" placeholder="Nhập lại mật khẩu" />
                                                                        <span id="btnPassword-confirm" class="login__box__form__showPass"></span>
                                                                </div>
                                                            </div>

                                                            <div class="uk-margin uk-text-center register__txt">
                                                                Với việc ấn vào nút “Đăng ký", Tôi đồng ý với <a href="">Điều khoản và Chính sách</a> của SIMPAY
                                                            </div>
                                                            <button type="button" uk-toggle="target: #modal-registerSuccess" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Đăng ký</span></button>

                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <div>
                                                    <div class="uk-text-center login__box__txt1">Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* <!--Đăng ký thành công--> */}
                <div id="modal-registerSuccess" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog login__modal__dialog uk-modal-body uk-margin-auto-vertical">

                        <button class="uk-modal-close-default login__modal__close" type="button" uk-close></button>
                        <div class="uk-margin-small uk-text-center">
                            <img src={ImgYay} alt="" />
                        </div>
                        <p class="login__modal__desc uk-text-center">Bạn đã đăng ký thành công tài khoản SIMPAY. Hãy trải nghiệm những dịch vụ tuyệt vời nhé!</p>

                        <div class="uk-grid-8" uk-grid>
                            <div class="uk-width-1-1">
                                <button type="submit" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Gửi</span></button>
                            </div>
                            <div class="uk-width-1-1">
                                <button type="submit" class="login__box__form__btnSubmit uk-button uk-button-default uk-width-1-1"><span>Quay lại</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                {/* <!--/Đăng ký thành công--> */}

            </div>

        </div>
    )
}
