<?php $data["title"] = "Liên hệ"; ?>
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
        'txt' => 'Liên hệ',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall lienhe__section">
    <div class="uk-container">
        <div class="lienhe__item">
            <h1 class="uk-h1 profile__content__title">Liên hệ</h1>
            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-32-m uk-grid-match" uk-grid>
                <div>
                    <div class="uk-position-relative">
                        <div class="uk-cover-container">
                            <img src="images/MaskGroup-lienhe.png" alt="" uk-cover>
                            <canvas width="1232" height="908"></canvas>
                        </div>
                        <div class="lienhe__about">
                            <h3 class="uk-h3 lienhe__about__title">Về chúng tôi</h3>
                            <p class="lienhe__about__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisl turpis. Aliquam ultrices eu quam in imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="uk-flex uk-flex-column">
                        <fieldset class="uk-fieldset uk-flex-auto">
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--user uk-icon" uk-icon="icon: user"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path></svg></span>
                                    <input class="uk-input login__box__form__input" type="text" placeholder="Họ và tên">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--email uk-icon" uk-icon="icon: user"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path></svg></span>
                                    <input class="uk-input login__box__form__input" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--phone1 uk-icon" uk-icon="icon: user"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path></svg></span>
                                    <input class="uk-input login__box__form__input" type="tel" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--comment uk-icon" uk-icon="icon: user"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path></svg></span>
                                    <textarea class="uk-textarea" rows="5" placeholder="Nhắn cho chúng tôi..."></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <div class="uk-margin-top">
                            <div class="uk-child-width-auto uk-grid-16 uk-flex-center" uk-grid>
                                <div>
                                    <button type="button" class="login__box__form__btnSubmit uk-button uk-button-secondary"><span>Gửi thông tin</span></button>
                                </div>
                                <div>
                                    <button type="button" class="uk-modal-close login__box__form__btnSubmit uk-button uk-button-default"><span>Nhập lại</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="lienhe__item">
            <h1 class="uk-h1 profile__content__title" style="margin-bottom: 0 !important;">Câu hỏi thường gặp</h1>
            <div class="lienhe__item__desc">Giải đáp những vấn đề thường gặp trong quá trình đặt hàng trên SIMPAY</div>

            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <ul class="uk-tab-left lienhe__tab" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                        <li class="lienhe__tab__li"><a class="lienhe__tab__a" href="#">Câu hỏi chung</a></li>
                        <li class="lienhe__tab__li"><a class="lienhe__tab__a" href="#">Hướng dẫn tìm sim</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand@m">
                    <ul id="component-tab-left" class="uk-switcher">
                        <li>
                            <ul class="lienhe__accordion" uk-accordion>
                                <li class="lienhe__accordion__li uk-open">
                                    <a class="uk-accordion-title lienhe__accordion__title" href="#">Đăng ký mua sim số trên simpay.vn như thế nào?</a>
                                    <div class="uk-accordion-content lienhe__accordion__content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisl turpis. Aliquam ultrices eu quam in imperdiet. Maecenas scelerisque turpis at tempus tempor. Donec aliquet mattis faucibus. Morbi ligula diam, vehicula eu mollis vel, interdum ut neque. Praesent rutrum vitae dolor sit amet tincidunt.</p>
                                    </div>
                                </li>
                                <li class="lienhe__accordion__li">
                                    <a class="uk-accordion-title lienhe__accordion__title" href="#">Đăng ký mua sim số trên simpay.vn như thế nào?</a>
                                    <div class="uk-accordion-content lienhe__accordion__content">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                    </div>
                                </li>
                                <li class="lienhe__accordion__li">
                                    <a class="uk-accordion-title lienhe__accordion__title" href="#">Đăng ký mua sim số trên simpay.vn như thế nào?</a>
                                    <div class="uk-accordion-content lienhe__accordion__content">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>